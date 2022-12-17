<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4889732e225995737eb0f48e99b380bc
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Renan\\Laravel\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Renan\\Laravel\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit4889732e225995737eb0f48e99b380bc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4889732e225995737eb0f48e99b380bc::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4889732e225995737eb0f48e99b380bc::$classMap;

        }, null, ClassLoader::class);
    }
}
