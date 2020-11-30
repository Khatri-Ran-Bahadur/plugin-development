<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8fdf727ba7cd7d7903b69579ada7cb19
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'Inc\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Inc\\' => 
        array (
            0 => __DIR__ . '/../..' . '/inc',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8fdf727ba7cd7d7903b69579ada7cb19::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8fdf727ba7cd7d7903b69579ada7cb19::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8fdf727ba7cd7d7903b69579ada7cb19::$classMap;

        }, null, ClassLoader::class);
    }
}
