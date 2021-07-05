<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7707d488f2194c1768eb8b2ad32a6c7e
{
    public static $prefixLengthsPsr4 = array (
        't' => 
        array (
            'testerotas\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'testerotas\\' => 
        array (
            0 => __DIR__ . '/..' . '/myphp/php-classes/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Slim' => 
            array (
                0 => __DIR__ . '/..' . '/slim/slim',
            ),
        ),
        'R' => 
        array (
            'Rain' => 
            array (
                0 => __DIR__ . '/..' . '/rain/raintpl/library',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7707d488f2194c1768eb8b2ad32a6c7e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7707d488f2194c1768eb8b2ad32a6c7e::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit7707d488f2194c1768eb8b2ad32a6c7e::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
