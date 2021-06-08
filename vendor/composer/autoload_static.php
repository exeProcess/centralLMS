<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit95814d8fe012857f7d3bac17fe45fa80
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
        'App\\controller\\LmsController' => __DIR__ . '/../..' . '/src/controller/LmsController.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit95814d8fe012857f7d3bac17fe45fa80::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit95814d8fe012857f7d3bac17fe45fa80::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit95814d8fe012857f7d3bac17fe45fa80::$classMap;

        }, null, ClassLoader::class);
    }
}