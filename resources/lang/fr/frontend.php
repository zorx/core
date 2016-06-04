<?php

return merge_trans('frontend', [
    'demonstration' => [
        'disabled' => 'Cette fonctionnalité a été désactivée dans la version de démonstration',
    ],
    'zedx'          => [
        'credits' => "Propulsé par <a href='https://zedx.io' title='CMS de petites annonces' target='_blank'>ZEDx</a>",
    ],
    'format'        => [
        'date'   => '',
        'number' => [
            'decimals'      => '0',
            'dec_point'     => ',',
            'thousands_sep' => ' ',
        ],
    ],
    'ad'            => [
        'preview_mode'      => 'Mode Prévisualisation',
        'validated_ad'      => 'Annonce acceptée',
        'pending_ad'        => 'Annonce en attente',
        'expired_ad'        => 'Annonce expirée',
        'banished_ad'       => 'Annonce refusée',
        'all_ads'           => 'Toutes les annonces',
        'description'       => 'Description',
        'contact'           => [
            'contact_announcer'    => 'Contacter l\'annonceur',
            'name'                 => 'Nom',
            'email'                => 'Email',
            'phone_number'         => 'N° Tèl',
            'message'              => 'Message',
            'send'                 => 'Envoyer',
            'ad_not_yet_validated' => 'L\'annonce n\'est pas encore validée',
            'sent'                 => 'Votre message a été envoyé avec succès!',
            'cant_send'            => 'Une erreur s\'est produite lors de l\'envoi du message!',
            'cancel'               => 'Annuler',
        ],
        'show_phone_number' => 'Afficher le numéro',
        'search'            => [
            'search'          => 'Rechercher...',
            'geolocation'     => 'Géolocalisation',
            'category'        => 'Catégorie',
            'choose_category' => 'Veuillez choisir une catégorie',
            'update_search'   => 'Actualiser la recherche',
            'all_ads'         => 'Toutes les annonces',
            'professional'    => 'Professionnel',
            'personal'        => 'Particulier',
            'date'            => 'Date',
            'price'           => 'Prix',
            'empty_ads_text'  => "Aucune annonce ne correspond à vos critères pour l'instant",
        ],
    ],
    'page'          => [
        'page_not_found_title' => '404 Page Introuvable',
        'page_not_found_text'  => 'La page que vous recherchez est introuvable.',
        'back_home'            => "Retour à la page d'accueil",
    ],
    'payment'       => [
        'success' => [
            'title'   => 'Paiement Accepté',
            'content' => 'Votre paiement a été accepté.',
        ],
        'error'   => [
            'title'   => 'Paiement refusé',
            'content' => 'Votre paiement a été refusé ou vous avez annulé la transaction.',
        ],
    ],
    'user'          => [
        'ad'             => [
            'add_ad'                             => "Ajouter l'annonce",
            'edit_ad'                            => "Modifier l'annonce",
            'subscription_expired'               => 'Votre abonnement a expiré, veuillez le renouveller en cliquant sur la rubrique Abonnements.',
            'cancel_delete'                      => 'Annuler',
            'delete'                             => 'Supprimer',
            'edit'                               => 'Modifier',
            'all_ads'                            => 'Toutes les annonces',
            'pending'                            => 'En attente',
            'validated'                          => 'Validées',
            'expired'                            => 'Expirées',
            'banished'                           => 'Refusées',
            'validated_ad'                       => 'Annonce acceptée',
            'banished_ad'                        => 'Annonce refusée',
            'pending_ad'                         => 'Annonce en attente',
            'expired_ad'                         => 'Annonce expirée',
            'published_at'                       => 'Publiée :time',
            'expired_at'                         => 'Expirée :time',
            'created_at'                         => 'Déposée :time',
            'renew_ad'                           => "Renouveler l'annonce",
            'expire_in'                          => 'Expire dans :count Jour|Expire dans :count Jours',
            'expire_today'                       => "Expire Aujourd'hui",
            'empty_ads_text'                     => "Aucune annonce n'est disponible dans cette section",
            'delete_ad_confirmation'             => 'Êtes vous sur de bien vouloir supprimer cette annonce ?',
            'ad_title'                           => "Titre de l'annonce",
            'geolocation'                        => 'Géolocalisation',
            'choose_a_geolocation'               => 'Veuillez choisir une geolocation',
            'geolocate_me'                       => 'Ma position',
            'description'                        => 'Description',
            'add_a_photo'                        => 'Ajouter une photo',
            'category'                           => 'Catégorie',
            'choose_a_category'                  => 'Veuillez choisir une catégorie',
            'photos'                             => 'Photos',
            'not_enough_permission_to_add_video' => "Vous n'avez pas le droit d'ajouter des vidéos.",
            'videos'                             => 'Videos',
            'add_video'                          => 'Ajouter la vidéo',
        ],
        'profile'        => [
            'name'                           => 'Nom complet',
            'status'                         => 'Statut',
            'edit_avatar'                    => 'Modifier',
            'edit'                           => 'Modifier',
            'email'                          => 'Email',
            'password'                       => 'Nouveau mot de passe',
            'password_confirmation'          => 'Confirmation',
            'valid_email_password'           => "Veuillez renseigner une adresse email valide ainsi qu'un mot de passe.",
            'current_password'               => 'Mot de passe actuel',
            'personal_account'               => 'Compte particulier',
            'professional_account'           => 'Compte professionnel',
            'phone_number'                   => 'N° de téléphone',
            'show_phone_number'              => 'Afficher le N°',
            'corporate_name'                 => 'Raison Sociale',
            'business_identification_number' => 'Siret',
            'no'                             => 'Non',
            'yes'                            => 'Oui',
        ],
        'account'        => [
            'logout'                         => 'Se Déconnecter',
            'login_in'                       => 'Se Connecter',
            'my_account'                     => 'Mon compte',
            'or'                             => 'Ou',
            'create_account'                 => 'Créer un compte',
            'name'                           => 'Nom complet',
            'email'                          => 'Email',
            'status'                         => 'Statut',
            'personal_account'               => 'Compte particulier',
            'professional_account'           => 'Compte professionnel',
            'corporate_name'                 => 'Raison Sociale',
            'business_identification_number' => 'Siret',
            'phone_number'                   => 'N° de téléphone',
            'show_phone_number'              => 'Afficher le N°',
            'password'                       => 'Mot de passe',
            'password_confirmation'          => 'Confirmation',
            'create_my_account'              => 'Créer mon compte',
            'no'                             => 'Non',
            'yes'                            => 'Oui',
        ],
        'login'          => [
            'login_in'           => 'Se Connecter',
            'or'                 => 'Ou',
            'create_account'     => 'Créer un compte',
            'forgot_my_password' => 'Mot de passe oublié ?',
            'email_address'      => 'Adresse Email',
            'password'           => 'Mot de passe',
            'remember_me'        => 'Garder ma session active',
            'connection'         => 'Connexion',
        ],
        'password_reset' => [
            'email_address'         => 'Adresse Email',
            'password'              => 'Mot de passe',
            'password_confirmation' => 'Confirmation',
            'reset_password'        => 'Réinitialiser le mot de passe',
            'send_reset_link'       => "M'envoyer le lien de réinitialisation",
        ],
        'adtype'         => [
            'headline_ad'           => 'Annonce à la une',
            'renew_an_ad'           => 'Renouveler une annonce',
            'edit_an_ad'            => 'Modifier une annonce',
            'add_photos'            => 'Ajouter des photos',
            'photos_peer_ad'        => 'Photos par annonce',
            'update_photos'         => 'Mettre à jour les photos',
            'add_videos'            => 'Ajouter des videos',
            'videos_peer_ad'        => 'Videos par annonce',
            'update_videos'         => 'Mettre à jour les videos',
            'display_time_of_an_ad' => "Durée d'affichage d'une annonce",
            'ad_price'              => "Prix d'une annonce",
            'remaining_ads'         => 'Annonces restantes',
            'unlimited'             => 'illimité',
            'nbr_days'              => ':count Jour|:count Jours',
            'free'                  => 'Gratuit',
            'days'                  => 'Jour(s)',
            'add'                   => 'Ajouter',
            'purchase'              => 'Acheter',
            'cart'                  => [
                'buy_ad'         => "Achat d'une annonce",
                'choose_gateway' => 'Veuillez choisir votre mode de paiement',
                'cancel'         => 'Annuler',
                'buy_now'        => 'Procéder au paiement',
                'total_price'    => 'Prix total',
            ],
        ],
        'subscription'   => [
            'subscription_type'      => "Type d'abonnement",
            'nbr_ads'                => "Nombre d'annonces :title",
            'display_time'           => "Durée d'affichage",
            'price'                  => 'Prix',
            'current'                => 'Actuel',
            'unlimited'              => 'illimité',
            'nbr_days'               => ':count Jour|:count Jours',
            'free'                   => 'Gratuit',
            'purchase'               => 'Acheter',
            'subscribe'              => 'Souscrire',
            'cancel'                 => 'Annuler',
            'subscribe_confirmation' => 'Êtes vous sur de bien vouloir souscrire cet abonnement ?',
            'cart'                   => [
                'buy_subscription' => "Achat d'un abonnement",
                'choose_gateway'   => 'Veuillez choisir votre mode de paiement',
                'cancel'           => 'Annuler',
                'buy_now'          => 'Procéder au paiement',
                'total_price'      => 'Prix total',
                'nbr_days'         => ':count Jour|:count Jours',
                'display_time'     => "Durée d'affichage",
            ],
        ],
    ],
]);
