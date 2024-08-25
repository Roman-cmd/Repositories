<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd751713988987e9331980363e24189ce
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PrintText\\' => 10,
        ),
        'A' => 
        array (
            'AnimalFactory\\' => 14,
            'AnimalFactoryManagement\\' => 24,
            'AnimalFactoryCage\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PrintText\\' => 
        array (
            0 => __DIR__ . '/../..' . '/php_step_2_oop/printText',
        ),
        'AnimalFactory\\' => 
        array (
            0 => __DIR__ . '/../..' . '/php_step_2_oop/animal_factory',
        ),
        'AnimalFactoryManagement\\' => 
        array (
            0 => __DIR__ . '/../..' . '/php_step_2_oop/animal_factory/management',
        ),
        'AnimalFactoryCage\\' => 
        array (
            0 => __DIR__ . '/../..' . '/php_step_2_oop/animal_factory/cage',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd751713988987e9331980363e24189ce::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd751713988987e9331980363e24189ce::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd751713988987e9331980363e24189ce::$classMap;

        }, null, ClassLoader::class);
    }
}
