<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6e1322981ab7bad267870e9c357e3714
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'Borne\\Projet-borne\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Borne\\Projet-borne\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6e1322981ab7bad267870e9c357e3714::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6e1322981ab7bad267870e9c357e3714::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
