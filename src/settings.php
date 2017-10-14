<?php
if (!\defined('DISCRETION_APP_ROOT')) {
    \define('DISCRETION_APP_ROOT', \dirname(__DIR__));
}

return [
    'settings' => [
        'displayErrorDetails' => true, // set to false in production
        'addContentLengthHeader' => false, // Allow the web server to send the content-length header

        // Renderer settings
        'renderer' => [
            'template_path' => __DIR__ . '/../templates/',
        ],

        'twig' => [
            'paths' => [
                \dirname(__DIR__) . '/templates/'
            ],
            'settings' => [
                // Defaults to 'html' strategy:
                'autoescape' => true
            ]
        ],

        // Monolog settings
        'logger' => [
            'name' => 'slim-app',
            'path' => isset($_ENV['docker']) ? 'php://stdout' : __DIR__ . '/../logs/app.log',
            'level' => \Monolog\Logger::DEBUG,
        ],
    ],
];
