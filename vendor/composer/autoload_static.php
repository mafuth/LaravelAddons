<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcb11fff573ed11444dccb0193ada1142
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Mafuth\\LaravelAddons\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Mafuth\\LaravelAddons\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitcb11fff573ed11444dccb0193ada1142::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcb11fff573ed11444dccb0193ada1142::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitcb11fff573ed11444dccb0193ada1142::$classMap;

        }, null, ClassLoader::class);
    }
}