<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/XAMPP/xamppfiles/htdocs/grav-admin/user/plugins/tablesorter/blueprints.yaml',
    'modified' => 1497541154,
    'data' => [
        'name' => 'Tablesorter',
        'version' => '1.1.4',
        'description' => 'Applies the jQuery plugin [Tablesorter](https://mottie.github.io/tablesorter/docs/) to tables in a page',
        'icon' => 'table',
        'author' => [
            'name' => 'Aaron Dalton',
            'email' => 'aaron@daltons.ca'
        ],
        'homepage' => 'https://github.com/Perlkonig/grav-plugin-tablesorter',
        'keywords' => 'grav, plugin, table, sort, jquery',
        'bugs' => 'https://github.com/Perlkonig/grav-plugin-tablesorter/issues',
        'docs' => 'https://github.com/Perlkonig/grav-plugin-tablesorter/blob/master/README.md',
        'demo' => 'https://perlkonig.com/demos/tablesorter',
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
                ]
            ]
        ]
    ]
];
