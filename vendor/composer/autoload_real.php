<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit2cde88c0dc328d03038f7b194e1b2401
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

        spl_autoload_register(array('ComposerAutoloaderInit2cde88c0dc328d03038f7b194e1b2401', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit2cde88c0dc328d03038f7b194e1b2401', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit2cde88c0dc328d03038f7b194e1b2401::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
