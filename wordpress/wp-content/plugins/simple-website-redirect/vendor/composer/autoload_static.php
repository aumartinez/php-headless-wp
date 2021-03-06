<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0eb818fbbde56292fd415bce49ac15aa
{
    public static $prefixLengthsPsr4 = array (
        'w' => 
        array (
            'wpscholar\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'wpscholar\\' => 
        array (
            0 => __DIR__ . '/..' . '/wpscholar/url',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'wpscholar\\Url' => __DIR__ . '/..' . '/wpscholar/url/Url.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0eb818fbbde56292fd415bce49ac15aa::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0eb818fbbde56292fd415bce49ac15aa::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0eb818fbbde56292fd415bce49ac15aa::$classMap;

        }, null, ClassLoader::class);
    }
}
