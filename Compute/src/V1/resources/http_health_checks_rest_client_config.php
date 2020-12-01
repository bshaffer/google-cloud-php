<?php

return [
    'interfaces' => [
        'google.cloud.compute.v1.HttpHealthChecks' => [
            'Delete' => [
                'method' => 'delete',
                'uriTemplate' => '/compute/v1/projects/{project}/global/httpHealthChecks/{http_health_check}',
                'placeholders' => [
                    'project' => [
                        'getters' => [
                            'getProject',
                        ],
                    ],
                    'http_health_check' => [
                        'getters' => [
                            'getHttpHealthCheck',
                        ],
                    ],
                ],
            ],
            'Get' => [
                'method' => 'get',
                'uriTemplate' => '/compute/v1/projects/{project}/global/httpHealthChecks/{http_health_check}',
                'placeholders' => [
                    'project' => [
                        'getters' => [
                            'getProject',
                        ],
                    ],
                    'http_health_check' => [
                        'getters' => [
                            'getHttpHealthCheck',
                        ],
                    ],
                ],
            ],
            'Insert' => [
                'method' => 'post',
                'uriTemplate' => '/compute/v1/projects/{project}/global/httpHealthChecks',
                'body' => 'http_health_check_resource',
                'placeholders' => [
                    'project' => [
                        'getters' => [
                            'getProject',
                        ],
                    ],
                ],
            ],
            'List' => [
                'method' => 'get',
                'uriTemplate' => '/compute/v1/projects/{project}/global/httpHealthChecks',
                'placeholders' => [
                    'project' => [
                        'getters' => [
                            'getProject',
                        ],
                    ],
                ],
            ],
            'Patch' => [
                'method' => 'patch',
                'uriTemplate' => '/compute/v1/projects/{project}/global/httpHealthChecks/{http_health_check}',
                'body' => 'http_health_check_resource',
                'placeholders' => [
                    'project' => [
                        'getters' => [
                            'getProject',
                        ],
                    ],
                    'http_health_check' => [
                        'getters' => [
                            'getHttpHealthCheck',
                        ],
                    ],
                ],
            ],
            'Update' => [
                'method' => 'put',
                'uriTemplate' => '/compute/v1/projects/{project}/global/httpHealthChecks/{http_health_check}',
                'body' => 'http_health_check_resource',
                'placeholders' => [
                    'project' => [
                        'getters' => [
                            'getProject',
                        ],
                    ],
                    'http_health_check' => [
                        'getters' => [
                            'getHttpHealthCheck',
                        ],
                    ],
                ],
            ],
        ],
    ],
];
