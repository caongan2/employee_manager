<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf995db2ce56613c3dcfe4618c622535d
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Src\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Src\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitf995db2ce56613c3dcfe4618c622535d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf995db2ce56613c3dcfe4618c622535d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf995db2ce56613c3dcfe4618c622535d::$classMap;

        }, null, ClassLoader::class);
    }
}
