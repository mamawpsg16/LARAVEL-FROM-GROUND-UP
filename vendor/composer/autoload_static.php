<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc9eaae01ab0dbaec5eea836bdb75c4c5
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitc9eaae01ab0dbaec5eea836bdb75c4c5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc9eaae01ab0dbaec5eea836bdb75c4c5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc9eaae01ab0dbaec5eea836bdb75c4c5::$classMap;

        }, null, ClassLoader::class);
    }
}
