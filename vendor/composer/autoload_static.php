<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc0b5206989adc3bc672358f70cda94d6
{
    public static $prefixLengthsPsr4 = array (
        'm' => 
        array (
            'mvc\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'mvc\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc0b5206989adc3bc672358f70cda94d6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc0b5206989adc3bc672358f70cda94d6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc0b5206989adc3bc672358f70cda94d6::$classMap;

        }, null, ClassLoader::class);
    }
}
