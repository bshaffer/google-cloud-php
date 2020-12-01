<?php

return [
    'interfaces' => [
        'google.cloud.compute.v1.HttpsHealthChecks' => [
            'Delete' => [
                'method' => 'delete',
                'uriTemplate' => '/compute/v1/projects/{project}/global/httpsHealthChecks/{https_health_check}',
                'placeholders' => [
                    'https_health_check' => [
                        'getters' => [
                            'getHttpsHealthCheck',
                        ],
                    ],
                    'project' => [
                        'getters' => [
                            'getProject',
                        ],
                    ],
                ],
            ],
            'Get' => [
                'method' => 'get',
                'uriTemplate' => '/compute/v1/projects/{project}/global/httpsHealthChecks/{https_health_check}',
                'placeholders' => [
                    'https_health_check' => [
                        'getters' => [
                            'getHttpsHealthCheck',
                        ],
                    ],
                    'project' => [
                        'getters' => [
                            'getProject',
                        ],
                    ],
                ],
            ],
            'Insert' => [
                'method' => 'post',
                'uriTemplate' => '/compute/v1/projects/{project}/global/httpsHealthChecks',
                'body' => 'https_health_check_resource',
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
                'uriTemplate' => '/compute/v1/projects/{project}/global/httpsHealthChecks',
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
                'uriTemplate' => '/compute/v1/projects/{project}/global/httpsHealthChecks/{https_health_check}',
                'body' => 'https_health_check_resource',
                'placeholders' => [
                    'https_health_check' => [
                        'getters' => [
                            'getHttpsHealthCheck',
                        ],
                    ],
                    'project' => [
                        'getters' => [
                            'getProject',
                        ],
                    ],
                ],
            ],
            'Update' => [
                'method' => 'put',
                'uriTemplate' => '/compute/v1/projects/{project}/global/httpsHealthChecks/{https_health_check}',
                'body' => 'https_health_check_resource',
                'placeholders' => [
                    'https_health_check' => [
                        'getters' => [
                            'getHttpsHealthCheck',
                        ],
                    ],
                    'project' => [
                        'getters' => [
                            'getProject',
                        ],
                    ],
                ],
            ],
        ],
    ],
];
