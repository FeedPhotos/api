<?php
return [
    'database' => [
        'adapter' => ucfirst(parse_url(getenv('DATABASE_URL'), PHP_URL_SCHEME)),
        'host' => parse_url(getenv('DATABASE_URL'), PHP_URL_HOST),
        'port' => parse_url(getenv('DATABASE_URL'), PHP_URL_PORT),
        'username' => parse_url(getenv('DATABASE_URL'), PHP_URL_USER),
        'password' => parse_url(getenv('DATABASE_URL'), PHP_URL_PASS),
        'dbname' => trim(parse_url(getenv('DATABASE_URL'), PHP_URL_PATH), '/'),
        'charset' => 'utf8',
    ],
    'application' => [
        'modulesDir' => MODULES_PATH,
        'viewsDir' => VIEWS_PATH,
        'cacheDir' => CACHE_PATH,
        'baseUri' => ''
    ],
    'view' => [
        'options' => [
            'compiledPath' => CACHE_PATH . 'compiled-view' . DS,
            'compiledExtension' => '.phtml',
            'compiledSeparator' => '__',
            'stat' => true,
            'prefix' => '',
            'compileAlways' => (bool)getenv('VIEW_COMPILE_ALWAYS'),
        ]
    ]
];
