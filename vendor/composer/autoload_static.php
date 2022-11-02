<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9ca85d0fedcd7359a985dc7220cf9248
{
    public static $prefixLengthsPsr4 = array (
        'J' => 
        array (
            'Jasonkonmax\\LaravelSupport\\' => 27,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Jasonkonmax\\LaravelSupport\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit9ca85d0fedcd7359a985dc7220cf9248::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9ca85d0fedcd7359a985dc7220cf9248::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9ca85d0fedcd7359a985dc7220cf9248::$classMap;

        }, null, ClassLoader::class);
    }
}
