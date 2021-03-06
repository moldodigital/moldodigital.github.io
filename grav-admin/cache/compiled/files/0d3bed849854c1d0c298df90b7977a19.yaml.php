<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/XAMPP/xamppfiles/htdocs/grav-admin/user/plugins/cookiesnotice/blueprints.yaml',
    'modified' => 1497532105,
    'data' => [
        'name' => 'CookiesNotice',
        'version' => '1.0.2',
        'description' => 'Grav plugin displays small banner on the botton or top of screen with informations about EU Cookie Directive.',
        'icon' => 'object-group',
        'author' => [
            'name' => 'Krzysztof Kwaśniak',
            'email' => 'kwachu@kwachu.org',
            'url' => 'https://kwachu.org'
        ],
        'homepage' => 'http://github.com/kwachu96/grav-plugin-cookies-notice',
        'bugs' => 'http://github.com/kwachu96/grav-plugin-cookies-notice/issues',
        'license' => 'MIT',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'Plugin status',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'jqcookie' => [
                    'type' => 'toggle',
                    'label' => 'Load jQuery Cookie',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ],
                    'help' => 'The jQuery Cookie PLugin v1.4.1 has to be loaded. If an error occurs, load it manually.'
                ],
                'position' => [
                    'type' => 'select',
                    'label' => 'Position',
                    'size' => 'small',
                    'default' => 'top',
                    'options' => [
                        'top' => 'Top',
                        'bot' => 'Bottom'
                    ],
                    'help' => NULL
                ],
                'url' => [
                    'type' => 'text',
                    'label' => 'Policy terms',
                    'size' => 'medium',
                    'placeholder' => 'http://example.com/policy',
                    'help' => 'Add here the url that points the full policy page.'
                ],
                'customcss' => [
                    'type' => 'toggle',
                    'label' => 'Custom CSS',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ],
                    'help' => 'Enable or disable custom CSS style.'
                ],
                'urlcss' => [
                    'type' => 'text',
                    'label' => 'Custom CSS url',
                    'size' => 'medium',
                    'placeholder' => 'http://example.com/assets/css/style.css',
                    'help' => 'Add here the url that points to css file.'
                ]
            ]
        ]
    ]
];
