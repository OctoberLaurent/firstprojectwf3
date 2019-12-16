<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/books' => [[['_route' => 'books:index', '_controller' => 'App\\Controller\\BooksController::index'], null, ['HEAD' => 0, 'GET' => 1], null, false, false, null]],
        '/book/security/create' => [[['_route' => 'books:create', '_controller' => 'App\\Controller\\BooksController::create'], null, ['HEAD' => 0, 'GET' => 1, 'POST' => 2], null, false, false, null]],
        '/' => [[['_route' => 'home_page', '_controller' => 'App\\Controller\\HomePageController::index'], null, null, null, false, false, null]],
        '/mail' => [[['_route' => 'mail', '_controller' => 'App\\Controller\\MailController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'register', '_controller' => 'App\\Controller\\SecurityController::register'], null, null, null, false, false, null]],
        '/account' => [[['_route' => 'account', '_controller' => 'App\\Controller\\SecurityController::account'], null, null, null, false, false, null]],
        '/books-alt' => [[['_route' => 'books-alt', '_controller' => 'App\\Controller\\BooksController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/book/(?'
                    .'|([^/]++)(*:186)'
                    .'|security/([^/]++)/(?'
                        .'|update(*:221)'
                        .'|delete(*:235)'
                    .')'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        186 => [[['_route' => 'books:read', '_controller' => 'App\\Controller\\BooksController::read'], ['id'], ['HEAD' => 0, 'GET' => 1], null, false, true, null]],
        221 => [[['_route' => 'books:update', '_controller' => 'App\\Controller\\BooksController::update'], ['id'], ['HEAD' => 0, 'GET' => 1, 'POST' => 2], null, false, false, null]],
        235 => [
            [['_route' => 'books:delete', '_controller' => 'App\\Controller\\BooksController::delete'], ['id'], ['HEAD' => 0, 'GET' => 1, 'DELETE' => 2], null, true, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
