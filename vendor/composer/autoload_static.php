<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit90cff4292d64b39f9f47e2fcf916d89b
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit90cff4292d64b39f9f47e2fcf916d89b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit90cff4292d64b39f9f47e2fcf916d89b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit90cff4292d64b39f9f47e2fcf916d89b::$classMap;

        }, null, ClassLoader::class);
    }
}