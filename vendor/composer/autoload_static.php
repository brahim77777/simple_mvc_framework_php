<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9932e84db9ff5a63b52298b9bf6f47f8
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'Brahim\\SimplePhpMvcFramework\\' => 29,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Brahim\\SimplePhpMvcFramework\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit9932e84db9ff5a63b52298b9bf6f47f8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9932e84db9ff5a63b52298b9bf6f47f8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9932e84db9ff5a63b52298b9bf6f47f8::$classMap;

        }, null, ClassLoader::class);
    }
}
