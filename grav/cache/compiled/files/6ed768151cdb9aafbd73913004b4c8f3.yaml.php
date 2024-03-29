<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/tanertemel/web/t4.bolton365.net/public_html/user/config/plugins/presentation.yaml',
    'modified' => 1573482996,
    'data' => [
        'enabled' => true,
        'theme' => 'night',
        'order' => [
            'by' => 'folder',
            'dir' => 'asc'
        ],
        'theme_css' => true,
        'builtin_css' => true,
        'builtin_js' => true,
        'plugin_css' => true,
        'plugin_js' => true,
        'textsizing' => true,
        'sync' => 'none',
        'api_route' => 'presentationapi',
        'poll_timeout' => 2000,
        'poll_retry_limit' => 10,
        'token_auth' => false,
        'token' => 'Hd4HFdPvbpKzTqz',
        'admin_async_save' => false,
        'admin_async_save_typing' => false,
        'transition' => true,
        'shortcodes' => true,
        'shortcode_classes' => 'presentation-iframe',
        'unwrap_images' => true,
        'content' => 'Content',
        'parser' => 'DecksetParser',
        'transport' => 'Transport',
        'breakpoints' => [
            240 => '8',
            320 => '10',
            576 => '18',
            768 => '24',
            992 => '32',
            1200 => '36',
            1600 => '40'
        ],
        'options' => [
            'width' => '100%',
            'height' => '100%',
            'margin' => '0',
            'minScale' => '1',
            'maxScale' => '1',
            'transition' => 'fade',
            'controlsTutorial' => 'false',
            'history' => 'true',
            'display' => 'flex',
            'pdfSeparateFragments' => ''
        ],
        'style' => [
            'header-font-family' => 'GillSans,\'Gill Sans MT\',Arial',
            'header-color' => '#ffffff',
            'block-font-family' => 'GillSans,\'Gill Sans MT\',Arial',
            'block-color' => '#ffffff',
            'background-color' => '#16161d',
            'justify-content' => 'center'
        ],
        'textsize' => [
            'modifier' => 1,
            'scale' => '1.125'
        ],
        'horizontal' => true
    ]
];
