<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/tanertemel/web/t4.bolton365.net/public_html/user/plugins/langswitcher/blueprints.yaml',
    'modified' => 1573482997,
    'data' => [
        'name' => 'LangSwitcher',
        'version' => '1.4.1',
        'description' => 'LangSwitcher is a [Grav](http://github.com/getgrav/grav) plugin that provides native language text links to switch between [multiple languages](http://learn.getgrav.org/content/multi-language) in Grav **v0.9.30** or greater.',
        'icon' => 'globe',
        'author' => [
            'name' => 'Team Grav',
            'email' => 'devs@getgrav.org',
            'url' => 'http://getgrav.org'
        ],
        'homepage' => 'https://github.com/getgrav/grav-plugin-langswitcher',
        'keywords' => 'mulitlang, multilanguage, translation, switcher',
        'bugs' => 'https://github.com/getgrav/grav-plugin-langswitcher/issues',
        'license' => 'MIT',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_ADMIN.PLUGIN_STATUS',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'built_in_css' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_LANGSWITCHER.BUILTIN_CSS',
                    'help' => 'PLUGIN_LANGSWITCHER.BUILTIN_CSS_HELP',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'untranslated_pages_behavior' => [
                    'type' => 'select',
                    'label' => 'PLUGIN_LANGSWITCHER.UNTRANSLATED_PAGES_BEHAVIOR',
                    'help' => 'PLUGIN_LANGSWITCHER.UNTRANSLATED_PAGES_BEHAVIOR_HELP',
                    'default' => 'none',
                    'options' => [
                        'none' => 'PLUGIN_LANGSWITCHER.UNTRANSLATED_PAGES_BEHAVIOR_OPTION_NONE',
                        'redirect' => 'PLUGIN_LANGSWITCHER.UNTRANSLATED_PAGES_BEHAVIOR_OPTION_REDIRECT',
                        'hide' => 'PLUGIN_LANGSWITCHER.UNTRANSLATED_PAGES_BEHAVIOR_OPTION_HIDE'
                    ]
                ]
            ]
        ]
    ]
];
