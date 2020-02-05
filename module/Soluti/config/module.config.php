<?php
return [
    'doctrine' => [
        'driver' => [
            'Soluti_driver' => [
                'class' => \Doctrine\ORM\Mapping\Driver\AnnotationDriver::class,
                'cache' => 'array',
                'paths' => [
                    0 => './module/Soluti/src/Entities',
                ],
            ],
            'orm_default' => [
                'drivers' => [
                    'Soluti' => 'Soluti_driver',
                ],
            ],
        ],
    ],
    'router' => [
        'routes' => [
            'soluti.rest.doctrine.groups' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/groups[/:groups_id]',
                    'defaults' => [
                        'controller' => 'Soluti\\V1\\Rest\\Groups\\Controller',
                    ],
                ],
            ],
            'soluti.rest.doctrine.files' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/files[/:files_id]',
                    'defaults' => [
                        'controller' => 'Soluti\\V1\\Rest\\Files\\Controller',
                    ],
                ],
            ],
            'soluti.rest.doctrine.users' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/users[/:users_id]',
                    'defaults' => [
                        'controller' => 'Soluti\\V1\\Rest\\Users\\Controller',
                    ],
                ],
            ],
        ],
    ],
    'zf-versioning' => [
        'uri' => [
            0 => 'soluti.rest.doctrine.groups',
            1 => 'soluti.rest.doctrine.files',
            2 => 'soluti.rest.doctrine.users',
        ],
    ],
    'zf-rest' => [
        'Soluti\\V1\\Rest\\Groups\\Controller' => [
            'listener' => \Soluti\V1\Rest\Groups\GroupsResource::class,
            'route_name' => 'soluti.rest.doctrine.groups',
            'route_identifier_name' => 'groups_id',
            'entity_identifier_name' => 'id',
            'collection_name' => 'groups',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PUT',
                2 => 'DELETE',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \Soluti\Entities\Groups::class,
            'collection_class' => \Soluti\V1\Rest\Groups\GroupsCollection::class,
            'service_name' => 'Groups',
        ],
        'Soluti\\V1\\Rest\\Files\\Controller' => [
            'listener' => \Soluti\V1\Rest\Files\FilesResource::class,
            'route_name' => 'soluti.rest.doctrine.files',
            'route_identifier_name' => 'files_id',
            'entity_identifier_name' => 'id',
            'collection_name' => 'files',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PUT',
                2 => 'DELETE',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \Soluti\Entities\Files::class,
            'collection_class' => \Soluti\V1\Rest\Files\FilesCollection::class,
            'service_name' => 'Files',
        ],
        'Soluti\\V1\\Rest\\Users\\Controller' => [
            'listener' => \Soluti\V1\Rest\Users\UsersResource::class,
            'route_name' => 'soluti.rest.doctrine.users',
            'route_identifier_name' => 'users_id',
            'entity_identifier_name' => 'id',
            'collection_name' => 'users',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PUT',
                2 => 'DELETE',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \Soluti\Entities\Users::class,
            'collection_class' => \Soluti\V1\Rest\Users\UsersCollection::class,
            'service_name' => 'Users',
        ],
    ],
    'zf-content-negotiation' => [
        'controllers' => [
            'Soluti\\V1\\Rest\\Groups\\Controller' => 'HalJson',
            'Soluti\\V1\\Rest\\Files\\Controller' => 'HalJson',
            'Soluti\\V1\\Rest\\Users\\Controller' => 'HalJson',
        ],
        'accept_whitelist' => [
            'Soluti\\V1\\Rest\\Groups\\Controller' => [
                0 => 'application/vnd.soluti.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'Soluti\\V1\\Rest\\Files\\Controller' => [
                0 => 'application/vnd.soluti.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'Soluti\\V1\\Rest\\Users\\Controller' => [
                0 => 'application/vnd.soluti.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
        ],
        'content_type_whitelist' => [
            'Soluti\\V1\\Rest\\Groups\\Controller' => [
                0 => 'application/vnd.soluti.v1+json',
                1 => 'application/json',
                2 => 'multipart/form-data',
            ],
            'Soluti\\V1\\Rest\\Files\\Controller' => [
                0 => 'application/vnd.soluti.v1+json',
                1 => 'application/json',
                2 => 'multipart/form-data',
            ],
            'Soluti\\V1\\Rest\\Users\\Controller' => [
                0 => 'application/vnd.soluti.v1+json',
                1 => 'application/json',
                2 => 'multipart/form-data',
            ],
        ],
    ],
    'zf-hal' => [
        'metadata_map' => [
            \Soluti\Entities\Groups::class => [
                'route_identifier_name' => 'groups_id',
                'entity_identifier_name' => 'id',
                'route_name' => 'soluti.rest.doctrine.groups',
                'hydrator' => 'Soluti\\V1\\Rest\\Groups\\GroupsHydrator',
            ],
            \Soluti\V1\Rest\Groups\GroupsCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'soluti.rest.doctrine.groups',
                'is_collection' => true,
            ],
            \Soluti\Entities\Files::class => [
                'route_identifier_name' => 'files_id',
                'entity_identifier_name' => 'id',
                'route_name' => 'soluti.rest.doctrine.files',
                'hydrator' => 'Soluti\\V1\\Rest\\Files\\FilesHydrator',
            ],
            \Soluti\V1\Rest\Files\FilesCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'soluti.rest.doctrine.files',
                'is_collection' => true,
            ],
            \Soluti\Entities\Users::class => [
                'route_identifier_name' => 'users_id',
                'entity_identifier_name' => 'id',
                'route_name' => 'soluti.rest.doctrine.users',
                'hydrator' => 'Soluti\\V1\\Rest\\Users\\UsersHydrator',
            ],
            \Soluti\V1\Rest\Users\UsersCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'soluti.rest.doctrine.users',
                'is_collection' => true,
            ],
        ],
    ],
    'zf-apigility' => [
        'doctrine-connected' => [
            \Soluti\V1\Rest\Groups\GroupsResource::class => [
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'Soluti\\V1\\Rest\\Groups\\GroupsHydrator',
            ],
            \Soluti\V1\Rest\Files\FilesResource::class => [
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'Soluti\\V1\\Rest\\Files\\FilesHydrator',
            ],
            \Soluti\V1\Rest\Users\UsersResource::class => [
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'Soluti\\V1\\Rest\\Users\\UsersHydrator',
            ],
        ],
    ],
    'doctrine-hydrator' => [
        'Soluti\\V1\\Rest\\Groups\\GroupsHydrator' => [
            'entity_class' => \Soluti\Entities\Groups::class,
            'object_manager' => 'doctrine.entitymanager.orm_default',
            'by_value' => true,
            'strategies' => [],
            'use_generated_hydrator' => true,
        ],
        'Soluti\\V1\\Rest\\Files\\FilesHydrator' => [
            'entity_class' => \Soluti\Entities\Files::class,
            'object_manager' => 'doctrine.entitymanager.orm_default',
            'by_value' => true,
            'strategies' => [],
            'use_generated_hydrator' => true,
        ],
        'Soluti\\V1\\Rest\\Users\\UsersHydrator' => [
            'entity_class' => \Soluti\Entities\Users::class,
            'object_manager' => 'doctrine.entitymanager.orm_default',
            'by_value' => true,
            'strategies' => [],
            'use_generated_hydrator' => true,
        ],
    ],
    'zf-content-validation' => [
        'Soluti\\V1\\Rest\\Groups\\Controller' => [
            'input_filter' => 'Soluti\\V1\\Rest\\Groups\\Validator',
        ],
        'Soluti\\V1\\Rest\\Files\\Controller' => [
            'input_filter' => 'Soluti\\V1\\Rest\\Files\\Validator',
        ],
        'Soluti\\V1\\Rest\\Users\\Controller' => [
            'input_filter' => 'Soluti\\V1\\Rest\\Users\\Validator',
        ],
    ],
    'input_filter_specs' => [
        'Soluti\\V1\\Rest\\Groups\\Validator' => [
            0 => [
                'name' => 'name',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => 255,
                        ],
                    ],
                ],
                'description' => '',
            ],
            1 => [
                'name' => 'createdAt',
                'required' => false,
                'filters' => [],
                'validators' => [],
            ],
            2 => [
                'name' => 'updatedAt',
                'required' => false,
                'filters' => [],
                'validators' => [],
            ],
        ],
        'Soluti\\V1\\Rest\\Files\\Validator' => [
            0 => [
                'name' => 'filename',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => 255,
                        ],
                    ],
                ],
            ],
            1 => [
                'name' => 'mime',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => 255,
                        ],
                    ],
                ],
            ],
            2 => [
                'name' => 'path',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => 255,
                        ],
                    ],
                ],
            ],
            3 => [
                'name' => 'size',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\Digits::class,
                    ],
                ],
                'validators' => [],
            ],
            4 => [
                'name' => 'createdAt',
                'required' => false,
                'filters' => [],
                'validators' => [],
            ],
            5 => [
                'name' => 'updatedAt',
                'required' => false,
                'filters' => [],
                'validators' => [],
            ],
        ],
        'Soluti\\V1\\Rest\\Users\\Validator' => [
            0 => [
                'name' => 'name',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => 255,
                        ],
                    ],
                ],
            ],
            1 => [
                'name' => 'email',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => 255,
                        ],
                    ],
                ],
            ],
            2 => [
                'name' => 'createdAt',
                'required' => false,
                'filters' => [],
                'validators' => [],
            ],
            3 => [
                'name' => 'updatedAt',
                'required' => false,
                'filters' => [],
                'validators' => [],
            ],
            4 => [
                'required' => true,
                'validators' => [],
                'filters' => [],
                'name' => 'group',
            ],
        ],
    ],
];
