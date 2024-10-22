<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1354018b08723430330af13ca06d9712
{
    public static $prefixLengthsPsr4 = array (
        'Q' => 
        array (
            'Qxprint\\Sdk\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Qxprint\\Sdk\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit1354018b08723430330af13ca06d9712::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1354018b08723430330af13ca06d9712::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1354018b08723430330af13ca06d9712::$classMap;

        }, null, ClassLoader::class);
    }
}
