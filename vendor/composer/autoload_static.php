<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit75f6fdc8ca61a3e93080dd96f14e1448
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
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit75f6fdc8ca61a3e93080dd96f14e1448::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit75f6fdc8ca61a3e93080dd96f14e1448::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit75f6fdc8ca61a3e93080dd96f14e1448::$classMap;

        }, null, ClassLoader::class);
    }
}
