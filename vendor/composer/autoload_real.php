<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInite71fc3d4f8ba3d9c5c911e6da9a9be44
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

        spl_autoload_register(array('ComposerAutoloaderInite71fc3d4f8ba3d9c5c911e6da9a9be44', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInite71fc3d4f8ba3d9c5c911e6da9a9be44', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInite71fc3d4f8ba3d9c5c911e6da9a9be44::getInitializer($loader));

        $loader->register(true);

        $includeFiles = \Composer\Autoload\ComposerStaticInite71fc3d4f8ba3d9c5c911e6da9a9be44::$files;
        foreach ($includeFiles as $fileIdentifier => $file) {
            composerRequiree71fc3d4f8ba3d9c5c911e6da9a9be44($fileIdentifier, $file);
        }

        return $loader;
    }
}

/**
 * @param string $fileIdentifier
 * @param string $file
 * @return void
 */
function composerRequiree71fc3d4f8ba3d9c5c911e6da9a9be44($fileIdentifier, $file)
{
    if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
        $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;

        require $file;
    }
}
