<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/riedbergtv/www.riedberg.tv/grav/user/themes/r0b3rt6-was-here/blueprints.yaml',
    'modified' => 1500640588,
    'data' => [
        'name' => 'R0b3rt6 Was Here',
        'version' => '0.1.0',
        'description' => 'New theme for R.tv v2',
        'icon' => 'rebel',
        'author' => [
            'name' => 'Lars Gröber',
            'email' => 'lars@elearning.physik.uni-frankfurt.de'
        ],
        'homepage' => 'https://github.com/lars-gr-ber/grav-theme-r0b3rt6-was-here',
        'demo' => 'http://demo.yoursite.com',
        'keywords' => 'grav, theme, etc',
        'bugs' => 'https://github.com/lars-gr-ber/grav-theme-r0b3rt6-was-here/issues',
        'readme' => 'https://github.com/lars-gr-ber/grav-theme-r0b3rt6-was-here/blob/develop/README.md',
        'license' => 'MIT',
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'dropdown.enabled' => [
                    'type' => 'toggle',
                    'label' => 'Dropdown in Menu',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
