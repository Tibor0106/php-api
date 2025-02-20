<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit27890546f9671c70e5e3e4f1d5d6a970
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

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInit27890546f9671c70e5e3e4f1d5d6a970', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit27890546f9671c70e5e3e4f1d5d6a970', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit27890546f9671c70e5e3e4f1d5d6a970::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
