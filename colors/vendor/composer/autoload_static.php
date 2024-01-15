<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9f81b61ff8801a3b350cd0da06a3a7e6
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Colors\\' => 7,
        ),
        'A' => 
        array (
            'App\\DB\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Colors\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
        'App\\DB\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App/DB',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9f81b61ff8801a3b350cd0da06a3a7e6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9f81b61ff8801a3b350cd0da06a3a7e6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9f81b61ff8801a3b350cd0da06a3a7e6::$classMap;

        }, null, ClassLoader::class);
    }
}
