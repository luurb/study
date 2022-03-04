<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit35c36b1e5bc17b63dac2b6d85982872f
{
    public static $prefixLengthsPsr4 = array (
        'c' => 
        array (
            'classes\\' => 8,
        ),
        'C' => 
        array (
            'Composer\\CaBundle\\' => 18,
        ),
        'A' => 
        array (
            'Abraham\\TwitterOAuth\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'classes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes',
        ),
        'Composer\\CaBundle\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/ca-bundle/src',
        ),
        'Abraham\\TwitterOAuth\\' => 
        array (
            0 => __DIR__ . '/..' . '/abraham/twitteroauth/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit35c36b1e5bc17b63dac2b6d85982872f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit35c36b1e5bc17b63dac2b6d85982872f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit35c36b1e5bc17b63dac2b6d85982872f::$classMap;

        }, null, ClassLoader::class);
    }
}