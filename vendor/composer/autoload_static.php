<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit089d9d9c4aa73534f4234cffaa8f7642
{
    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Slim' => 
            array (
                0 => __DIR__ . '/..' . '/slim/slim',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit089d9d9c4aa73534f4234cffaa8f7642::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
