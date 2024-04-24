<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/books' => [[['_route' => 'app_book', '_controller' => 'App\\Controller\\FetchEntityController::fetchBooks'], null, null, null, false, false, null]],
        '/authors' => [[['_route' => 'app_authors', '_controller' => 'App\\Controller\\FetchEntityController::fetchAuthors'], null, null, null, false, false, null]],
        '/publishers' => [[['_route' => 'app_publishers', '_controller' => 'App\\Controller\\FetchEntityController::fetchPublishers'], null, null, null, false, false, null]],
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
