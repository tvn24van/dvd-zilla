<?php

/**
 * Used to store website configuration information.
 *
 * @var string or null
 */
function config($key = '')
{
    $config = [
        'name' => 'DVD Zilla',
        'site_url' => '/dvd-zilla',
        'pretty_uri' => true,
        'nav_menu' => [
            '' => 'Strona główna',
            'o-nas' => 'O nas',
            'produkty' => 'Produkty',
            'panel' => 'Panel zarzadzania',
            'kontakt' => 'Kontakt',
        ],
        'template_path' => 'template',
        'content_path' => 'content',
        'version' => '0.1',
    ];

    return isset($config[$key]) ? $config[$key] : null;
}
