<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite8077182f6d454b414f493e5ba0f875c
{
    public static $prefixLengthsPsr4 = array (
        'G' => 
        array (
            'Gjun\\Blog\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Gjun\\Blog\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInite8077182f6d454b414f493e5ba0f875c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite8077182f6d454b414f493e5ba0f875c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite8077182f6d454b414f493e5ba0f875c::$classMap;

        }, null, ClassLoader::class);
    }
}
