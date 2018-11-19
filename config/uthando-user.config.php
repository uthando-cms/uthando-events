<?php

use UthandoEvents\Controller\EventsController;
use UthandoEvents\Controller\SettingsController;
use UthandoEvents\Controller\TimeLineController;

return [
    'uthando_user' => [
        'acl' => [
            'roles' => [
                'guest' => [
                    'privileges' => [
                        'allow' => [
                            'controllers' => [
                                TimeLineController::class => ['action' => ['index']],
                            ],
                        ],
                    ],
                ],
                'admin' => [
                    'privileges' => [
                        'allow' => [
                            'controllers' => [
                                EventsController::class => ['action' => 'all'],
                                SettingsController::class => ['action' => 'all'],
                            ],
                        ],
                    ],
                ],
            ],
            'resources' => [
                EventsController::class,
                SettingsController::class,
                TimeLineController::class,
            ],
        ],
    ],
];
