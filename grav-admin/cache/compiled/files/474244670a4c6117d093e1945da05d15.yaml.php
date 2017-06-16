<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/XAMPP/xamppfiles/htdocs/grav-admin/user/plugins/table-importer/blueprints.yaml',
    'modified' => 1497540180,
    'data' => [
        'name' => 'Table Importer',
        'version' => '2.1.4',
        'description' => 'Imports tables from JSON, YAML, and CSV formats into HTML tables within a page',
        'icon' => 'table',
        'author' => [
            'name' => 'Aaron Dalton',
            'email' => 'aaron@daltons.ca'
        ],
        'homepage' => 'https://github.com/Perlkonig/grav-plugin-table-importer',
        'keywords' => 'grav, plugin, tables, import, json, yaml, csv',
        'bugs' => 'https://github.com/Perlkonig/grav-plugin-table-importer/issues',
        'docs' => 'https://github.com/Perlkonig/grav-plugin-table-importer/blob/master/README.md',
        'demo' => 'https://perlkonig.com/demos/table-importer',
        'license' => 'MIT',
        'dependencies' => [
            0 => 'shortcode-core'
        ],
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
