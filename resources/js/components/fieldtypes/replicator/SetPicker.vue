<template>

    <popover
        ref="popover"
        class="set-picker select-none"
        placement="bottom-start"
        :disabled="!hasMultipleSets"
        @opened="opened"
        @closed="closed"
        @click="triggerWasClicked"
        @clicked-away="$emit('clicked-away', $event)"
    >
        <template #trigger>
            <slot name="trigger" />
        </template>
        <template #default>
            <div class="set-picker-header p-3 border-b text-xs flex items-center">
                <input ref="search" type="text" class="py-1 px-2 border rounded w-full" :placeholder="__('Search Sets')" v-show="showSearch" v-model="search" />
                <div v-if="showGroupBreadcrumb" class="flex items-center text-gray-700 font-medium">
                    <button @click="unselectGroup" class=" hover:text-gray-900 ml-2.5 rounded">
                        {{ __('Groups') }}
                    </button>
                    <svg-icon name="micro/chevron-right" class="w-4 h-4" />
                    <span>{{ selectedGroupDisplayText }}</span>
                </div>
            </div>
            <div class="p-1 max-h-[21rem] overflow-auto">
                <div v-for="(item, i) in items" :key="item.handle" class="cursor-pointer rounded" :class="{ 'bg-gray-200': selectionIndex === i }" @mouseover="selectionIndex = i">
                    <div v-if="item.type === 'group'" @click="selectGroup(item.handle)" class="flex items-center group px-2 py-1.5 rounded-md">
                        <div class="h-9 w-9 rounded bg-white border border-gray-600 mr-2 p-2">
                            <svg-icon :name="item.icon ? `plump/${item.icon}` : 'folder-generic'" class="text-gray-800" />
                        </div>
                        <div class="flex-1">
                            <div class="text-md font-medium text-gray-800 truncate w-52">{{ __(item.display || item.handle) }}</div>
                            <div v-if="item.instructions" class="text-2xs text-gray-700 truncate w-52">{{ __(item.instructions) }}</div>
                        </div>
                        <svg-icon name="micro/chevron-right-thin" class="text-gray-600 group-hover:text-gray-800" />
                    </div>
                    <div v-if="item.type === 'set'" @click="addSet(item.handle)" class="flex items-center group px-2 py-1.5 rounded-md">
                        <div class="h-9 w-9 rounded bg-white border border-gray-600 mr-2 p-2">
                            <svg-icon :name="item.icon ? `plump/${item.icon}` : 'light/add'" class="text-gray-800" />
                        </div>
                        <div class="flex-1">
                            <div class="text-md font-medium text-gray-800 truncate w-52">{{ __(item.display || item.handle) }}</div>
                            <div v-if="item.instructions" class="text-2xs text-gray-700 truncate w-52">{{ __(item.instructions) }}</div>
                        </div>
                    </div>
                </div>
                <div v-if="noSearchResults" class="text-center text-gray-600 text-xs p-3">
                    {{ __('No results') }}
                </div>
            </div>
        </template>
    </popover>

</template>

<script>
export default {

    props: {
        sets: Array
    },

    data() {
        return {
            selectedGroupHandle: null,
            search: null,
            selectionIndex: 0,
            keybindings: [],
        }
    },

    computed: {

        showSearch() {
            return !this.hasMultipleGroups || !this.selectedGroup;
        },

        showGroupBreadcrumb() {
            return this.hasMultipleGroups && this.selectedGroup;
        },

        showGroups() {
            return this.hasMultipleGroups && !this.selectedGroup && !this.search;
        },

        hasMultipleSets() {
            return this.sets.reduce((count, group) => {
                return count + group.sets.length;
            }, 0) > 1;
        },

        hasMultipleGroups() {
            return this.sets.length > 1;
        },

        selectedGroup() {
            return this.sets.find(group => group.handle === this.selectedGroupHandle);
        },

        selectedGroupDisplayText() {
            return this.selectedGroup ? __(this.selectedGroup.display || this.selectedGroup.handle) : null;
        },

        visibleSets() {
            if (!this.selectedGroup && !this.search) return [];

            let sets = this.selectedGroup ? this.selectedGroup.sets : this.sets.reduce((sets, group) => {
                return sets.concat(group.sets);
            }, []);

            if (this.search) {
                return sets.filter(set => {
                    return __(set.display).toLowerCase().includes(this.search.toLowerCase())
                        || set.handle.toLowerCase().includes(this.search.toLowerCase());
                });
            }

            return sets;
        },

        items() {
            let items = [];

            if (this.showGroups) {
                this.sets.forEach(group => {
                    items.push({ ...group, type: 'group' });
                });
            }

            this.visibleSets.forEach(set => {
                items.push({ ...set, type: 'set' });
            });

            return items;

        },

        noSearchResults() {
            return this.search && this.visibleSets.length === 0;
        }

    },

    watch: {

        search() {
            this.selectionIndex = 0;
        }

    },

    methods: {

        addSet(handle) {
            this.$emit('added', handle);
            this.unselectGroup();
            this.search = null;
            this.$refs.popover.close();
        },

        selectGroup(handle) {
            this.selectedGroupHandle = handle;
            this.selectionIndex = 0;
        },

        unselectGroup() {
            this.selectedGroupHandle = null;
        },

        opened() {
            // setTimeout(() => this.$refs.search.focus(), 150);
            this.$refs.search.focus();

            if (this.sets.length === 1) {
                this.selectedGroupHandle = this.sets[0].handle;
            }

            this.bindKeys();
        },

        closed() {
            this.unbindKeys();
        },

        bindKeys() {
            this.keybindings = [
                this.$keys.bindGlobal('up', e => this.keypressUp(e)),
                this.$keys.bindGlobal('down', e => this.keypressDown(e)),
                this.$keys.bindGlobal('enter', e => this.keypressEnter(e)),
            ];
        },

        unbindKeys() {
            this.keybindings.forEach(binding => binding.destroy());
            this.keybindings = [];
        },

        keypressUp(e) {
            e.preventDefault();
            this.selectionIndex = this.selectionIndex === 0 ? this.items.length - 1 : this.selectionIndex - 1;
        },

        keypressDown(e) {
            e.preventDefault();
            this.selectionIndex = this.selectionIndex === this.items.length-1 ? 0 : this.selectionIndex + 1;
        },

        keypressEnter(e) {
            e.preventDefault();
            const item = this.items[this.selectionIndex];
            if (item.type === 'group') {
                this.selectGroup(item.handle);
            } else {
                this.addSet(item.handle);
            }
        },

        triggerWasClicked() {
            if (! this.hasMultipleSets) {
                this.addSet(this.sets[0].sets[0].handle);
            }
        }

    }

}
</script>
