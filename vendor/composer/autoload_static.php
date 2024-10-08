<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3bd631e749bf33aa44932a64c55a404d
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Smokinglife\\Apigateway\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Smokinglife\\Apigateway\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit3bd631e749bf33aa44932a64c55a404d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3bd631e749bf33aa44932a64c55a404d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3bd631e749bf33aa44932a64c55a404d::$classMap;

        }, null, ClassLoader::class);
    }
}
