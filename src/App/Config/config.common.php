<?php

return [
    'routes'    => [
        [
            'pattern'    => '^/hello/(.*?)$',
            'controller' => 'App\Controllers\WelcomeController::helloAction',
        ],
        [
            'pattern'    => '^/foo$',
            'controller' => 'App\Controllers\WelcomeController::fooAction',
        ],
        [
            'pattern'    => '^/*$',
            'controller' => 'App\Controllers\WelcomeController::defaultAction',
        ],
    ],

    // ------------------------------------------

    'paths'     => [
        'src'    => __DIR__ . '/../../App/',
        'public' => __DIR__ . '/../../../public/',
    ],

    // ------------------------------------------

    'templates' => [
        'isNative' => true,
        'locale'   => [
            'default'   => 'en',
            'available' => [],
        ],
    ],
];