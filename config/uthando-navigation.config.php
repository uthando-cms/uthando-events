<?php

return [
    'navigation' => [
        'admin' => [
            'admin' => [
                'pages' => [
                    'settings' => [
                        'pages' => [
                            'events-settings' => [
                                'label' => 'Events',
                                'action' => 'index',
                                'route' => 'admin/events/settings',
                                'resource' => 'menu:admin',
                            ],
                        ],
                    ],
                ],
            ],
            'events' => [
                'label' => 'Events',
                'params' => [
                    'icon' => 'fa-calendar-o',
                ],
                'pages' => [
                    'list' => [
                        'label'     => 'List All Events',
                        'action'    => 'list',
                        'route'     => 'admin/events',
                        'resource'  => 'menu:admin'
                    ],
                    'add' => [
                        'label'     => 'Add New Event',
                        'action'    => 'add',
                        'route'     => 'admin/events/edit',
                        'resource'  => 'menu:admin'
                    ],
                    'settings' => [
                        'label' => 'Settings',
                        'action' => 'index',
                        'route' => 'admin/events/settings',
                        'resource' => 'menu:admin',
                    ],
                ],
                'route' => 'admin/events',
                'resource' => 'menu:admin'
            ],
        ],
    ],
];
