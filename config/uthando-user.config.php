<?php

return [
    'uthando_user' => [
        'acl' => [
            'roles' => [
                'guest' => [
                    'privileges' => [
                        'allow' => [
                            'controllers' => [
                                'UthandoEvents\Controller\TimeLine' => ['action' => ['index']],
                            ],
                        ],
                    ],
                ],
                'admin' => [
                    'privileges' => [
                        'allow' => [
                            'controllers' => [
                                'UthandoEvents\Controller\Events' => ['action' => 'all'],
                                'UthandoEvents\Controller\Settings' => ['action' => 'all'],
                            ],
                        ],
                    ],
                ],
            ],
            'resources' => [
                'UthandoEvents\Controller\Events',
                'UthandoEvents\Controller\Settings',
                'UthandoEvents\Controller\TimeLine',
            ],
        ],
    ],
];
