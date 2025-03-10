<?php

return [
    'activate_account_notification_body' => 'Vous recevez cet email car nous avons reçu une demande de réinitialisation du mot de passe pour votre compte.',
    'activate_account_notification_subject' => 'Activez votre compte',
    'addon_has_more_releases_beyond_license_body' => 'Vous pouvez mettre à jour, mais vous devrez mettre à niveau ou acheter une nouvelle licence.',
    'addon_has_more_releases_beyond_license_heading' => 'Cet addon a plus de versions au-delà de votre limite de licence.',
    'addon_install_command' => 'Pour installer cet addon, exécutez la commande suivante',
    'addon_list_loading_error' => 'Une erreur s’est produite lors du chargement des addons. Réessayez plus tard.',
    'addon_uninstall_command' => 'Pour désinstaller cet addon, exécutez la commande suivante',
    'asset_container_allow_uploads_instructions' => 'Les utilisateurs peuvent-ils téléverser des fichiers dans ce conteneur ?',
    'asset_container_blueprint_instructions' => 'Les Blueprints définissent les champs personnalisés additionnels disponibles lors de la modification des ressources.',
    'asset_container_create_folder_instructions' => 'Les utilisateurs peuvent-ils créer des dossiers dans ce conteneur ?',
    'asset_container_disk_instructions' => 'Les disques du système de fichiers vous permettent de préciser où seront stockés les fichiers, soit localement, soit sur un emplacement externe comme Amazon S3. Ils peuvent être configurés dans `config/filesystems.php`',
    'asset_container_handle_instructions' => 'Comment vous allez faire référence à ce conteneur sur le frontal. Ne peut pas être facilement changé.',
    'asset_container_intro' => 'Les fichiers media et documents sont stockés dans des répertoires sur votre serveur ou dans d’autres services de stockage de fichiers. Chacun de ces emplacements est appelé un conteneur.',
    'asset_container_move_instructions' => 'Les utilisateurs peuvent-ils déplacer les fichiers au sein de ce conteneur ?',
    'asset_container_quick_download_instructions' => 'Ajouter un bouton de téléchargement rapide dans le Gestionnaire de Ressources ?',
    'asset_container_rename_instructions' => 'Les utilisateurs peuvent-ils renommer les fichiers dans ce conteneur ?',
    'asset_container_source_preset_instructions' => 'Les images téléchargées seront systématiquement traitées par le biais de ce préréglage.',
    'asset_container_title_instructions' => 'Habituellement un nom au pluriel, comme "Images" ou "Documents".',
    'asset_container_warm_intelligent_instructions' => 'Générez des préréglages appropriés lors du téléchargement.',
    'asset_container_warm_presets_instructions' => 'Précisez les préréglages à générer lors du téléchargement.',
    'asset_folders_directory_instructions' => 'Nous vous recommandons d’éviter les espaces et les caractères spéciaux pour garder vos URL propres.',
    'asset_replace_confirmation' => 'Les références à cette ressource au sein du contenu seront mises à jour en fonction de la ressource sélectionnée ci-dessous.',
    'asset_reupload_confirmation' => 'Êtes-vous sûr de vouloir télécharger de nouveau cette ressource ?',
    'asset_reupload_warning' => 'Vous pourriez rencontrer des problèmes de mise en cache au niveau du navigateur ou du serveur. Vous préférerez peut-être plutôt remplacer la ressource.',
    'blueprints_hidden_instructions' => 'Masque ce Blueprint quand on clique sur le bouton Créer dans le Panneau de configuration',
    'blueprints_intro' => 'Les Blueprints définissent et organisent les champs afin de créer les modèles de contenu pour les collections, les formulaires et d’autres types de données.',
    'blueprints_title_instructions' => 'Habituellement un nom singulier, comme "Article" ou "Produit"',
    'cache_utility_application_cache_description' => 'Le cache unifié de Laravel utilisé par Statamic, les extensions tierces et les packages Composer.',
    'cache_utility_description' => 'Gérez et affichez des informations importantes sur les différentes couches de mise en cache de Statamic.',
    'cache_utility_image_cache_description' => 'Le cache d’images stocke des copies de toutes les images transformées et redimensionnées.',
    'cache_utility_stache_description' => 'Le Stache est le magasin de contenu de Statamic qui fonctionne de manière similaire à une base de données. Il est généré automatiquement à partir de vos fichiers de contenu.',
    'cache_utility_static_cache_description' => 'Les pages statiques contournent complètement Statamic et sont rendues directement à partir de votre serveur pour des performances optimales.',
    'choose_entry_localization_deletion_behavior' => 'Choisissez l’action que vous souhaitez effectuer sur les entrées localisées.',
    'collection_configure_date_behavior_private' => 'Privées - Non listées, URLs 404',
    'collection_configure_date_behavior_public' => 'Publiques - Toujours visibles',
    'collection_configure_date_behavior_unlisted' => 'Non listées - URLs accessibles',
    'collection_configure_dated_instructions' => 'Les dates de publication peuvent être utilisées pour planifier la publication/dépublication du contenu.',
    'collection_configure_handle_instructions' => 'Comment vous allez faire référence à cette collection sur le frontal. Ne peut pas être facilement changé.',
    'collection_configure_intro' => 'Une collection est un groupe d’entrées liées qui partagent comportement, attributs et paramètres.',
    'collection_configure_layout_instructions' => 'Définissez la disposition par défaut de cette collection. Les entrées peuvent outrepasser ce paramètre avec un champ `template` nommé `layout`. La modification de ce paramètre est inhabituelle.',
    'collection_configure_origin_behavior_instructions' => 'Au moment de traduire une entrée, quel site doit être utilisé comme origine ?',
    'collection_configure_origin_behavior_option_active' => 'Utiliser le site actif de l’entrée en cours de modification',
    'collection_configure_origin_behavior_option_root' => 'Utiliser le site pour lequel l’entrée a été initialement créée',
    'collection_configure_origin_behavior_option_select' => 'Laisser l’utilisateur sélectionner l’origine',
    'collection_configure_propagate_instructions' => 'Propagez automatiquement les nouvelles entrées vers tous les sites configurés.',
    'collection_configure_require_slugs_instructions' => 'Exiger que chaque entrée ait un identifiant unique ?',
    'collection_configure_template_instructions' => 'Définissez le modèle par défaut de cette collection. Les entrées peuvent outrepasser ce paramètre avec un champ `template`.',
    'collection_configure_title_format_instructions' => 'Définissez ceci pour que les entrées de cette collection génèrent automatiquement leurs titres. Apprenez-en plus dans la [documentation](https://statamic.dev/collections#titles).',
    'collection_configure_title_instructions' => 'Nous recommandons un nom au pluriel, comme "Articles" ou "Produits".',
    'collection_next_steps_blueprints_description' => 'Gérez les Blueprints et les champs disponibles pour cette collection.',
    'collection_next_steps_configure_description' => 'Configurez les URLs et les routes, définissez les Blueprints, les comportements des dates, l’ordonnancement et d’autres options.',
    'collection_next_steps_create_entry_description' => 'Créez la première entrée ou générez quelques entrées génériques, à vous de voir.',
    'collection_next_steps_scaffold_description' => 'Générez rapidement des vues d’index et de détail à partir du nom de votre collection.',
    'collection_revisions_instructions' => 'Active les révisions pour cette collection',
    'collection_scaffold_instructions' => 'Choisissez les vues vides à générer. Les fichiers existants ne seront pas écrasés.',
    'collections_blueprint_instructions' => 'Les entrées de cette collection peuvent utiliser l’un de ces Blueprints.',
    'collections_default_publish_state_instructions' => 'Lors de la création de nouvelles entrées dans cette collection, l’indicateur de publication basculera par défaut sur **true** plutôt que sur **false** (brouillon).',
    'collections_future_date_behavior_instructions' => 'Conditions d’accès aux entrées datées dans le futur.',
    'collections_links_instructions' => 'Les entrées de cette collection peuvent contenir des liens (redirections) vers d’autres entrées ou URLs.',
    'collections_mount_instructions' => 'Choisissez une entrée sur laquelle cette collection doit être montée. Apprenez-en plus dans la [documentation](https://statamic.dev/collections#mounting).',
    'collections_orderable_instructions' => 'Activez le réordonnancement manuel par glisser-déposer.',
    'collections_past_date_behavior_instructions' => 'Conditions d’accès aux entrées datées ayant expiré.',
    'collections_preview_target_refresh_instructions' => 'Rafraîchit automatiquement l’Aperçu pendant la modification. Désactiver cela entraînera l’utilisation de postMessage.',
    'collections_preview_targets_instructions' => 'Les URLs qui seront visibles dans l’Aperçu en direct. Apprenez-en plus dans la [documentation](https://statamic.dev/live-preview#preview-targets).',
    'collections_route_instructions' => 'La route contrôle le modèle d’URL des entrées. Apprenez-en plus dans la [documentation](https://statamic.dev/collections#routing).',
    'collections_sort_direction_instructions' => 'Le sens de tri par défaut.',
    'collections_taxonomies_instructions' => 'Reliez les entrées de cette collection à des taxonomies. Les champs seront automatiquement ajoutés aux formulaires.',
    'email_utility_configuration_description' => 'Les paramètres de messagerie sont configurés dans <code>:path</code>',
    'email_utility_description' => 'Vérifiez les paramètres de messagerie et envoyez des e-mails de test.',
    'entry_origin_instructions' => 'La nouvelle traduction héritera des valeurs qu’a l’entrée dans le site sélectionné.',
    'expect_root_instructions' => 'Considérer la première page de l’arborescence comme une page "racine" ou "d’accueil".',
    'field_conditions_always_save_instructions' => 'Toujours enregistrer la valeur du champ, quelle que soit la façon dont les conditions du champ sont évaluées.',
    'field_conditions_field_instructions' => 'Vous pouvez saisir n’importe quel identifiant de champ. Vous n’êtes pas limité aux options visibles dans le menu déroulant.',
    'field_conditions_instructions' => 'Quand afficher ou masquer ce champ.',
    'field_desynced_from_origin' => 'Désynchronisé de l’origine. Cliquez pour synchroniser et revenir à la valeur d’origine.',
    'field_synced_with_origin' => 'Synchronisé avec l’origine. Cliquez ou modifiez le champ pour désynchroniser.',
    'field_validation_advanced_instructions' => 'Ajouter des règles de validation plus avancées à ce champ.',
    'field_validation_required_instructions' => 'Permet de contrôler si ce champ est obligatoire ou non.',
    'field_validation_sometimes_instructions' => 'Ce champ ne se valide que lorsqu’il est visible ou soumis.',
    'fields_blueprints_description' => 'Les Blueprints définissent les champs pour les structures de contenu comme les collections, les taxonomies, les utilisateurs et les formulaires.',
    'fields_default_instructions' => 'Définissez la valeur par défaut.',
    'fields_display_instructions' => 'L’étiquette du champ affichée dans le Panneau de configuration.',
    'fields_duplicate_instructions' => 'Inclure ce champ lors de la duplication de l’élément ?',
    'fields_fieldsets_description' => 'Les jeux de champs sont des groupements simples, flexibles et totalement facultatifs de champs qui aident à organiser des champs réutilisables et préconfigurés.',
    'fields_handle_instructions' => 'La variable de modèle du champ.',
    'fields_instructions_instructions' => 'Texte affiché sous l’étiquette du champ (comme celui-ci). Markdown est pris en compte.',
    'fields_instructions_position_instructions' => 'Défini le positionnement des instructions par rapport au champ.',
    'fields_listable_instructions' => 'Contrôle la visibilité de ce champ dans les colonnes.',
    'fields_replicator_preview_instructions' => 'Contrôle la visibilité de l’Aperçu dans les ensembles Replicator/Bard.',
    'fields_visibility_instructions' => 'Contrôle la visibilité de ce champ dans les formulaires.',
    'fieldset_import_fieldset_instructions' => 'Le jeu de champs à importer.',
    'fieldset_import_prefix_instructions' => 'Le préfixe à appliquer à chaque champ lors de leur importation. Ex. hero_',
    'fieldset_intro' => 'Les jeux de champs sont des compagnons optionnels des Blueprints qui vous permettent de créer des partiels réutilisables dans tous vos Blueprints.',
    'fieldset_link_fields_prefix_instructions' => 'Tous les champs du jeu de champs lié seront préfixés avec ceci. Utile quand vous voulez importer les mêmes champs plusieurs fois.',
    'fieldsets_handle_instructions' => 'Comment vous allez faire référence à ce jeu de champs sur le frontal. Ne peut pas être facilement changé.',
    'fieldsets_title_instructions' => 'Décrit généralement quels champs sont inclus, comme "Bloc Image" ou "Metadonnées"',
    'focal_point_instructions' => 'La définition d’un point focal permet un recadrage dynamique des photos avec un sujet qui reste dans le cadre.',
    'focal_point_previews_are_examples' => 'Les aperçus de recadrage n’ont qu’une valeur d’exemple',
    'forgot_password_enter_email' => 'Entrez votre adresse e-mail afin que nous puissions envoyer un lien de réinitialisation du mot de passe.',
    'form_configure_blueprint_instructions' => 'Choisissez un Blueprint existant ou créez-en un nouveau.',
    'form_configure_email_attachments_instructions' => 'Joindre à cet e-mail une ressource déjà téléchargée.',
    'form_configure_email_from_instructions' => 'Laissez vide pour revenir à la valeur par défaut du site.',
    'form_configure_email_html_instructions' => 'La vue pour la version HTML de cet e-mail.',
    'form_configure_email_instructions' => 'Configurez les emails à envoyer quand de nouvelles soumissions de formulaires sont reçues.',
    'form_configure_email_markdown_instructions' => 'Rendez la version HTML de cet e-mail en utilisant Markdown.',
    'form_configure_email_reply_to_instructions' => 'Laissez le champ vide pour un retour à l’expéditeur.',
    'form_configure_email_subject_instructions' => 'Objet de l’e-mail.',
    'form_configure_email_text_instructions' => 'La vue pour la version Texte de cet e-mail.',
    'form_configure_email_to_instructions' => 'Adresse email du destinataire.',
    'form_configure_handle_instructions' => 'Comment vous allez faire référence à ce formulaire sur le frontal. Ne peut pas être facilement changé.',
    'form_configure_honeypot_instructions' => 'Le nom du champ à utiliser pour le pot de miel. Les pots de miel sont des champs spéciaux utilisés pour réduire le nombre de spams.',
    'form_configure_intro' => 'Les formulaires sont utilisés pour collecter des informations auprès de vos visiteurs et envoyer des évènements et des notifications quand il y a de nouvelles soumissions.',
    'form_configure_store_instructions' => 'Désactivez cette option pour ne plus stocker les soumissions. Les évènements et les notifications seront toujours envoyés.',
    'form_configure_title_instructions' => 'Habituellement un appel à l’action, comme "Contactez-nous".',
    'getting_started_widget_blueprints' => 'Les Blueprints définissent les champs personnalisés utilisés pour créer et stocker votre contenu.',
    'getting_started_widget_collections' => 'Les collections contiennent les différents types de contenu de votre site.',
    'getting_started_widget_docs' => 'Apprenez à connaître Statamic pour bien comprendre ses capacités.',
    'getting_started_widget_header' => 'Débuter avec Statamic',
    'getting_started_widget_intro' => 'Pour commencer à construire votre nouveau site avec Statamic, nous vous recommandons de commencer par ces étapes.',
    'getting_started_widget_navigation' => 'Créez des listes de liens multi-niveaux qui pourront être utilisées pour afficher des barres de navigation, des pieds de page, etc.',
    'getting_started_widget_pro' => 'Statamic Pro donne l’accès à un nombre illimité de comptes utilisateurs, aux rôles, permissions, à l’intégration avec Git, aux révisions, aux multi-sites et bien plus encore !',
    'git_disabled' => 'L’intégration de Statamic Git est actuellement désactivée',
    'git_nothing_to_commit' => 'Rien à commettre, les chemins de contenu sont propres !',
    'git_utility_description' => 'Gérez le contenu tracé par Git.',
    'global_search_open_using_slash' => 'Ouvrez la recherche globale en utilisant la touche <kbd>/</kbd>',
    'global_set_config_intro' => 'Les jeux de globales gèrent le contenu disponible sur l’ensemble du site, comme  les infos de l’entreprise, les coordonnées de contact ou les paramètres frontaux.',
    'global_set_no_fields_description' => 'Vous pouvez ajouter des champs au Blueprint ou vous pouvez aussi ajoutez manuellement et directement des variables au jeu.',
    'globals_blueprint_instructions' => 'Contrôle les champs à afficher lors de la modification des variables.',
    'globals_configure_handle_instructions' => 'Comment vous allez faire référence à ce jeu de globales sur le frontal. Ne peut pas être facilement changé.',
    'globals_configure_intro' => 'Un jeu de globales est un groupe de variables disponibles pour toutes les pages frontales du site.',
    'globals_configure_title_instructions' => 'Nous recommandons un nom représentatif des contenus de ce jeu, comme "Marque" ou "Société".',
    'licensing_config_cached_warning' => 'Les modifications que vous apportez à vos fichiers .env ou de configuration ne seront pas détectées tant que vous n’aurez pas vidé le cache. Si vous voyez des résultats de licence inattendus ici, c’est peut-être à cause de cela. Vous pouvez utiliser la commande <code>php artisan config:cache</code> pour régénérer le cache.',
    'licensing_error_invalid_domain' => 'Domaine invalide',
    'licensing_error_invalid_edition' => 'La licence est pour l’édition :edition',
    'licensing_error_no_domains' => 'Aucun domaine défini',
    'licensing_error_no_site_key' => 'Aucune clé de licence de site',
    'licensing_error_outside_license_range' => 'Licence valable pour les versions :start et :end',
    'licensing_error_unknown_site' => 'Site inconnu',
    'licensing_error_unlicensed' => 'Sans licence',
    'licensing_incorrect_key_format_body' => 'Il semble que votre clef de site n’est pas dans le format attendu. Merci de la vérifier et de réessayer. Vous pouvez récupérer votre clef de site dans votre espace "Account" sur statamic.com. Elle consiste en une chaîne de 16 caractères alphanumériques. Vérifiez que vous n’utilisez plus l’ancienne clef de licence qui était un UUID.',
    'licensing_incorrect_key_format_heading' => 'Format de la clef de site incorrecte',
    'licensing_production_alert' => 'Ce site utilise Statamic Pro et des addons commerciaux. Veuillez acheter les licences appropriées.',
    'licensing_production_alert_addons' => 'Ce site utilise des addons commerciaux. Veuillez acheter les licences appropriées.',
    'licensing_production_alert_renew_statamic' => 'L’utilisation de cette version de Statamic Pro requiert le renouvellement de la licence.',
    'licensing_production_alert_statamic' => 'Ce site utilise Statamic Pro. Veuillez acheter une licence.',
    'licensing_sync_instructions' => 'Les données de statamic.com sont synchronisées une fois par heure. Forcez une synchronisation pour voir toutes les modifications que vous avez apportées.',
    'licensing_trial_mode_alert' => 'Ce site utilise Statamic Pro et des addons commerciaux. Assurez-vous d’acheter des licences avant de le lancer. Merci !',
    'licensing_trial_mode_alert_addons' => 'Ce site utilise des addons commerciaux. Assurez-vous d’acheter des licences avant de le lancer. Merci !',
    'licensing_trial_mode_alert_statamic' => 'Ce site utilise Statamic Pro. Assurez-vous d’acheter une licence avant de le lancer. Merci !',
    'licensing_utility_description' => 'Affichez et résolvez les détails de la licence.',
    'max_depth_instructions' => 'Définissez le nombre maximum de niveaux sur lesquels une page peut être imbriquée. Laissez vide pour aucune limite.',
    'max_items_instructions' => 'Définissez un nombre maxi d’éléments sélectionnables.',
    'navigation_configure_blueprint_instructions' => 'Choisissez un Blueprint existant ou créez-en un nouveau.',
    'navigation_configure_collections_instructions' => 'Activer le lien vers les entrées de ces collections.',
    'navigation_configure_handle_instructions' => 'Comment vous allez faire référence à cette navigation sur le frontal. Ne peut pas être facilement changé.',
    'navigation_configure_intro' => 'Les navigations sont des listes multi-niveaux de liens qui peuvent être utilisées pour construire des barres de navigation, des pieds de page, des plans de site et d’autres formes de navigation sur le frontal.',
    'navigation_configure_settings_intro' => 'Activer les liens vers les collections, définir une profondeur maximale et d’autres comportements.',
    'navigation_configure_title_instructions' => 'Nous recommandons un nom qui corresponde à son emplacement, comme "Nav Principale" ou "Nav Pied De Page".',
    'navigation_documentation_instructions' => 'En savoir plus sur la construction, la configuration et le rendu des navigations.',
    'navigation_link_to_entry_instructions' => 'Ajoutez un lien à une entrée. Activez les liens avec des collections supplémentaires dans l’espace de configuration.',
    'navigation_link_to_url_instructions' => 'Ajoutez un lien vers n’importe quelle URL interne ou externe. Activez les liens vers les entrées dans l’espace de configuration.',
    'outpost_error_422' => 'Erreur de communication avec statamic.com.',
    'outpost_error_429' => 'Trop de demandes à statamic.com.',
    'outpost_issue_try_later' => 'Un problème est survenu lors de la communication avec statamic.com. Veuillez réessayer plus tard.',
    'password_protect_enter_password' => 'Entrez le mot de passe pour déverrouiller',
    'password_protect_incorrect_password' => 'Mot de passe erroné',
    'password_protect_token_invalid' => 'Jeton non valide ou ayant expiré',
    'password_protect_token_missing' => 'Le jeton sécurisé fait défaut. Vous devez arriver sur cet écran depuis l’URL protégée originelle.',
    'phpinfo_utility_description' => 'Vérifiez vos paramètres de configuration PHP et les modules installés.',
    'preference_favorites_instructions' => 'Raccourcis qui seront affichés lors de l’ouverture de la barre de recherche globale. Vous pouvez également visiter la page et utiliser l’icône d’épingle en haut pour l’ajouter à cette liste.',
    'preference_locale_instructions' => 'La langue d’affichage préférée du panneau de contrôle.',
    'preference_start_page_instructions' => 'La première page affichée après connexion au panneau de contrôle.',
    'publish_actions_create_revision' => 'Une révision sera créée à partir de la copie de travail. La révision actuelle ne changera pas.',
    'publish_actions_current_becomes_draft_because_scheduled' => 'Étant donné que la révision actuelle est publiée et que vous avez sélectionné une date dans le futur, une fois que vous aurez soumis la révision, elle restera en statut brouillon jusqu’à la date sélectionnée.',
    'publish_actions_publish' => 'Les modifications apportées à la copie de travail s’appliqueront à l’entrée et celle-ci sera publiée immédiatement.',
    'publish_actions_schedule' => 'Les modifications apportées à la copie de travail s’appliqueront à l’entrée et celle-ci paraîtra publiée à la date sélectionnée.',
    'publish_actions_unpublish' => 'La révision actuelle sera dépubliée.',
    'reset_password_notification_body' => 'Vous recevez cet email car nous avons reçu une demande de réinitialisation du mot de passe pour votre compte.',
    'reset_password_notification_no_action' => 'Si vous n’avez pas demandé de réinitialisation de mot de passe, aucune autre action n’est requise.',
    'reset_password_notification_subject' => 'Notification de réinitialisation du mot de passe',
    'role_change_handle_warning' => 'Changer l’identifiant ne mettra pas à jour les références à ce dernier dans les utilisateurs et les groupes.',
    'role_handle_instructions' => 'Comment vous allez faire référence à ce rôle sur le frontal. Ne peut pas être facilement changé.',
    'role_intro' => 'Les rôles sont des groupes d’autorisations d’accès et d’action qui peuvent être attribuées aux utilisateurs et aux groupes d’utilisateurs.',
    'role_title_instructions' => 'Habituellement un nom singulier, comme "Editeur" ou "Admin".',
    'search_utility_description' => 'Gérez et affichez des informations importantes sur les index de recherche de Statamic.',
    'session_expiry_enter_password' => 'Entrez votre mot de passe pour reprendre là où vous en étiez.',
    'session_expiry_logged_out_for_inactivity' => 'Vous avez été déconnecté parce que vous êtes resté inactif trop longtemps.',
    'session_expiry_logging_out_in_seconds' => 'Vous avez été inactif pendant un certain temps et vous serez déconnecté dans :seconds secondes. Cliquez pour prolonger votre session.',
    'session_expiry_new_window' => 'S’ouvre dans une nouvelle fenêtre. Revenez une fois que serez reconnecté.',
    'show_slugs_instructions' => 'Afficher les identifiants dans la vue arborescente ?',
    'status_expired_with_date' => 'A expiré le :date',
    'status_published_with_date' => 'Publiée le :date',
    'status_scheduled_with_date' => 'Publication prévue le :date',
    'taxonomies_blueprints_instructions' => 'Les termes de cette taxonomie peuvent utiliser n’importe lequel de ces Blueprints.',
    'taxonomies_collections_instructions' => 'Les collections qui utilisent cette taxonomie.',
    'taxonomies_preview_target_refresh_instructions' => 'Raffraîchi automatiquement l’Aperçu pendant la modification. Désactiver cela entraînera l’utilisation de postMessage.',
    'taxonomies_preview_targets_instructions' => 'Les URLs qui seront visibles dans l’Aperçu en direct. Apprenez-en plus dans la [documentation](https://statamic.dev/live-preview#preview-targets).',
    'taxonomy_configure_handle_instructions' => 'Comment vous allez faire référence à cette taxonomie sur le frontal. Ne peut pas être facilement changé.',
    'taxonomy_configure_intro' => 'Une taxonomie est un système de classification des données autour d’un ensemble de caractéristiques uniques, telles que la catégorie ou la couleur.',
    'taxonomy_configure_title_instructions' => 'Nous recommandons un nom au pluriel, comme "Catégories" ou "Etiquettes".',
    'taxonomy_next_steps_configure_description' => 'Configurez des noms, associez des collections, définissez des Blueprints et plus encore.',
    'taxonomy_next_steps_create_term_description' => 'Créez votre premier terme ou générez une poignée de termes génériques, à vous de voir.',
    'taxonomy_next_steps_documentation_description' => 'Apprenez-en plus au sujet des taxonomies, comment elles fonctionnent et comment les configurer.',
    'try_again_in_seconds' => '{0,1} Réessayez maintenant. | Réessayez dans :count secondes.',
    'updater_require_version_command' => 'Pour exiger une version spécifique, exécutez la commande suivante',
    'updater_update_to_latest_command' => 'Pour mettre à jour vers la dernière version, exécutez la commande suivante',
    'user_groups_intro' => 'Les groupes d’utilisateurs vous permettent d’organiser les utilisateurs et d’appliquer des rôles basés sur des autorisations dans leur ensemble.',
    'user_groups_role_instructions' => 'Affectez des rôles afin de donner aux utilisateurs de ce groupe toutes les autorisations correspondantes.',
    'user_groups_title_instructions' => 'Habituellement un nom au pluriel, comme "Editeurs" ou "Photographes".',
    'user_wizard_account_created' => 'Le compte utilisateur a été créé.',
    'user_wizard_email_instructions' => 'L’adresse e-mail sert également de nom d’utilisateur et doit être unique.',
    'user_wizard_intro' => 'Les utilisateurs peuvent se voir attribuer des rôles qui personnalisent leurs autorisations, accès et possibilités d’agir au sein du Panneau de configuration.',
    'user_wizard_invitation_body' => 'Activez votre nouveau compte Statamic sur :site pour commencer à gérer ce site. Pour votre sécurité, le lien ci-dessous expire après :expiry heures. Ensuite, contactez l’administrateur du site pour obtenir un nouveau mot de passe.',
    'user_wizard_invitation_intro' => 'Envoyez un courrier électronique de bienvenue avec les détails d’activation du compte au nouvel utilisateur.',
    'user_wizard_invitation_share' => 'Copiez ces informations d’identification et partagez-les avec <code>:email</code> via votre méthode préférée.',
    'user_wizard_invitation_share_before' => 'Après avoir créé l’utilisateur, vous recevrez des détails à partager avec <code>:email</code> via votre méthode préférée.',
    'user_wizard_invitation_subject' => 'Activez votre nouveau compte Statamic sur :site',
    'user_wizard_name_instructions' => 'Laissez la zone "nom" vide si vous souhaitez que l’utilisateur la renseigne.',
    'user_wizard_roles_groups_intro' => 'Les utilisateurs peuvent se voir attribuer des rôles qui personnalisent leurs autorisations, accès et possibilités d’agir au sein du Panneau de configuration.',
    'user_wizard_super_admin_instructions' => 'Les super-admin ont le contrôle complet du système et l’accès à tout ce qui se trouve dans le Panneau de configuration. Accordez ce rôle à bon escient.',
    'view_more_count' => 'En voir :count de plus',
];
