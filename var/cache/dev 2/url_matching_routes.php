<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/enseignants' => [[['_route' => 'enseignant_list', '_controller' => 'App\\Controller\\EnseignantController::list'], null, null, null, false, false, null]],
        '/dashboard' => [[['_route' => 'dashboard', '_controller' => 'App\\Controller\\DashboardController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout'], null, null, null, false, false, null]],
        '/matieres' => [[['_route' => 'matiere_list', '_controller' => 'App\\Controller\\MatiereController::list'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/enseignant/([^/]++)/edit(*:67)'
                .'|/([^/]++)(*:83)'
                .'|/matiere/([^/]++)/edit(*:112)'
                .'|/([^/]++)(*:129)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        67 => [[['_route' => 'enseignant_edit', '_controller' => 'App\\Controller\\EnseignantController::edit'], ['id'], null, null, false, false, null]],
        83 => [[['_route' => 'enseignant_delete', '_controller' => 'App\\Controller\\EnseignantController::delete'], ['id'], null, null, false, true, null]],
        112 => [[['_route' => 'matiere_edit', '_controller' => 'App\\Controller\\MatiereController::edit'], ['id'], null, null, false, false, null]],
        129 => [
            [['_route' => 'matiere_delete', '_controller' => 'App\\Controller\\MatiereController::delete'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
