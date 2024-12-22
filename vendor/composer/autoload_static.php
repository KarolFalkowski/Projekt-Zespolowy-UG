<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf5c81658115011a19c64943423043339
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Facebook\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Facebook\\' => 
        array (
            0 => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf5c81658115011a19c64943423043339::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf5c81658115011a19c64943423043339::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf5c81658115011a19c64943423043339::$classMap;

        }, null, ClassLoader::class);
    }
}