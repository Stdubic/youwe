<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita376ff6c30bf502e6001dbac897b19f2
{
    public static $prefixesPsr0 = array (
        'H' => 
        array (
            'HelloWorld' => 
            array (
                0 => __DIR__ . '/../..' . '/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInita376ff6c30bf502e6001dbac897b19f2::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
