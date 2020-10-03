<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\AdminController::dashbord'], null, null, null, false, false, null]],
        '/admin/producteurs/add' => [[['_route' => 'producteurs_add', '_controller' => 'App\\Controller\\AdminController::product_add'], null, null, null, false, false, null]],
        '/admin/paniers/add' => [[['_route' => 'paniers_add', '_controller' => 'App\\Controller\\AdminController::paniers_add'], null, null, null, false, false, null]],
        '/admin/produits/delete' => [[['_route' => 'admin_produits_delete', '_controller' => 'App\\Controller\\AdminController::deleteProduits'], null, null, null, false, false, null]],
        '/admin/commandes/delete' => [[['_route' => 'admin_commandes_delete', '_controller' => 'App\\Controller\\AdminController::deleteCommande'], null, null, null, false, false, null]],
        '/commande' => [[['_route' => 'commande', '_controller' => 'App\\Controller\\CommandeController::index'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'app_contact', '_controller' => 'App\\Controller\\ContactController::contact'], null, null, null, false, false, null]],
        '/home' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/index' => [[['_route' => 'index', '_controller' => 'App\\Controller\\IndexController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'root', '_controller' => 'App\\Controller\\IndexController::root'], null, null, null, false, false, null]],
        '/mentions' => [[['_route' => 'app_mentions', '_controller' => 'App\\Controller\\MentionsController::index'], null, null, null, false, false, null]],
        '/newsletter' => [[['_route' => 'app_newsletter', '_controller' => 'App\\Controller\\NewsletterController::newsletter'], null, null, null, false, false, null]],
        '/paiement' => [[['_route' => 'paiement', '_controller' => 'App\\Controller\\PaiementController::index'], null, null, null, false, false, null]],
        '/paiement/success' => [[['_route' => 'paiement_success', '_controller' => 'App\\Controller\\PaiementController::success'], null, null, null, false, false, null]],
        '/paniers' => [[['_route' => 'paniers', '_controller' => 'App\\Controller\\PaniersController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/admin/(?'
                    .'|p(?'
                        .'|roducteur(?'
                            .'|/delete/([^/]++)(*:84)'
                            .'|s/edit/([^/]++)(*:106)'
                        .')'
                        .'|aniers/(?'
                            .'|delete/([^/]++)(*:140)'
                            .'|edit/([^/]++)(*:161)'
                        .')'
                    .')'
                    .'|user/delete/([^/]++)(*:191)'
                .')'
                .'|/commande/(?'
                    .'|add/(\\d+)(*:222)'
                    .'|delete/(\\d+)(*:242)'
                .')'
                .'|/newsletter/unsubscribe/([^/]++)(*:283)'
                .'|/register/([^/]++)/edit(*:314)'
                .'|/user/([^/]++)(*:336)'
                .'|/delete/([^/]++)(*:360)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        84 => [[['_route' => 'admin_producteur_delete', '_controller' => 'App\\Controller\\AdminController::deleteProducteur'], ['id'], null, null, false, true, null]],
        106 => [[['_route' => 'producteurs_edit', '_controller' => 'App\\Controller\\AdminController::product_add'], ['id'], null, null, false, true, null]],
        140 => [[['_route' => 'admin_paniers_delete', '_controller' => 'App\\Controller\\AdminController::deletePanier'], ['id'], null, null, false, true, null]],
        161 => [[['_route' => 'paniers_edit', '_controller' => 'App\\Controller\\AdminController::paniers_add'], ['id'], null, null, false, true, null]],
        191 => [[['_route' => 'admin_user_delete', '_controller' => 'App\\Controller\\AdminController::deleteUser'], ['id'], null, null, false, true, null]],
        222 => [[['_route' => 'commande_add', '_controller' => 'App\\Controller\\CommandeController::add'], ['id'], null, null, false, true, null]],
        242 => [[['_route' => 'commande_delete', '_controller' => 'App\\Controller\\CommandeController::delete'], ['id'], null, null, false, true, null]],
        283 => [[['_route' => 'newsletter_unsubscribe', '_controller' => 'App\\Controller\\NewsletterController::unsubscribeNewsletter'], ['id'], null, null, false, true, null]],
        314 => [[['_route' => 'register_edit', '_controller' => 'App\\Controller\\RegistrationController::register'], ['id'], null, null, false, false, null]],
        336 => [[['_route' => 'user', '_controller' => 'App\\Controller\\UserController::index'], ['id'], null, null, false, true, null]],
        360 => [
            [['_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
