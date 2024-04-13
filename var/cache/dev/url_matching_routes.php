<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/author' => [[['_route' => 'app_author', '_controller' => 'App\\Controller\\AuthorController::createAuthor'], null, null, null, false, false, null]],
        '/book' => [[['_route' => 'app_book', '_controller' => 'App\\Controller\\BookController::createBook'], null, null, null, false, false, null]],
        '/publisher' => [[['_route' => 'app_publisher', '_controller' => 'App\\Controller\\PublisherController::createPublisher'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];