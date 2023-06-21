<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit659504aa5f0f57ac17e82631317c1054
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Component\\Asset\\' => 24,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Component\\Asset\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/asset',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit659504aa5f0f57ac17e82631317c1054::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit659504aa5f0f57ac17e82631317c1054::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit659504aa5f0f57ac17e82631317c1054::$classMap;

        }, null, ClassLoader::class);
    }
}
