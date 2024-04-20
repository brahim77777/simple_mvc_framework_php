<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit9932e84db9ff5a63b52298b9bf6f47f8
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

        spl_autoload_register(array('ComposerAutoloaderInit9932e84db9ff5a63b52298b9bf6f47f8', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit9932e84db9ff5a63b52298b9bf6f47f8', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit9932e84db9ff5a63b52298b9bf6f47f8::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
