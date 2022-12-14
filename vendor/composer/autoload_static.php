<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5ef399ca69282d67201bc4c351bc8024
{
    public static $files = array (
        '7b6da17ee52fc1de63821b4ffee602db' => __DIR__ . '/../..' . '/config/app.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Component\\Dotenv\\' => 25,
        ),
        'D' => 
        array (
            'Database\\' => 9,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Component\\Dotenv\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/dotenv',
        ),
        'Database\\' => 
        array (
            0 => __DIR__ . '/../..' . '/database',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5ef399ca69282d67201bc4c351bc8024::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5ef399ca69282d67201bc4c351bc8024::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5ef399ca69282d67201bc4c351bc8024::$classMap;

        }, null, ClassLoader::class);
    }
}
