<?php

return [
    'asset_manager' => [
        'resolver_configs' => [
            'collections' => [
                'css/uthando-admin.css' => [
                    'css/event-styles.css',
                ],
            ],
            'paths' => [
                'UthandoEvents' => __DIR__ . '/../public',
            ],
        ],
    ],
    'controllers' => [
        'invokables' => [
            'UthandoEvents\Controller\Events'   => 'UthandoEvents\Mvc\Controller\EventsController',
            'UthandoEvents\Controller\Settings' => 'UthandoEvents\Mvc\Controller\SettingsController',
            'UthandoEvents\Controller\TimeLine' => 'UthandoEvents\Mvc\Controller\TimeLineController',
        ],
    ],
    'form_elements' => [
        'invokables' => [
            'UthandoEvents'         => 'UthandoEvents\Form\EventsForm',
            'UthandoEventsSettings' => 'UthandoEvents\Form\SettingsForm',
        ],
    ],
    'hydrators' => [
        'invokables' => [
            'UthandoEvents' => 'UthandoEvents\Hydrator\EventsHydrator',
        ],
    ],
    'input_filters' => [
        'invokables' => [
            'UthandoEvents' => 'UthandoEvents\InputFilter\EventsInputFilter',
        ],
    ],
    'service_manager' => [
        'factories' => [
            'UthandoEvents\Options\Event' => 'UthandoEvents\Options\ServiceManager\EventsOptionsFactory',
        ]
    ],
    'uthando_mappers' => [
        'invokables' => [
            'UthandoEvents' => 'UthandoEvents\Mapper\EventsMapper',
        ],
    ],
    'uthando_models' => [
        'invokables' => [
            'UthandoEvents' => 'UthandoEvents\Model\EventModel',
        ],
    ],
    'uthando_services' => [
        'invokables' => [
            'UthandoEvents' => 'UthandoEvents\ServiceManager\EventsService',
        ],
    ],
    'view_manager' => [
        'template_map' => include __DIR__ . '/../template_map.php',
        'template_path_stack' => [
            'uthando-events' => __DIR__ . '/../view'
        ],
    ],
    'router' => [
        'routes' => [
            'events' => [
                'type' => 'Literal',
                'options' => [
                    'route' => '/events',
                    'defaults' => [
                        '__NAMESPACE__' => 'UthandoEvents\Controller',
                        'controller'    => 'TimeLine',
                        'action'        => 'index',
                        'force-ssl'     => 'http'
                    ],
                ],
                'may_terminate' => true,
            ],
        ],
    ],

];
