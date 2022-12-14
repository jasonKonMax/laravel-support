<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit9ca85d0fedcd7359a985dc7220cf9248
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInit9ca85d0fedcd7359a985dc7220cf9248', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit9ca85d0fedcd7359a985dc7220cf9248', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit9ca85d0fedcd7359a985dc7220cf9248::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
