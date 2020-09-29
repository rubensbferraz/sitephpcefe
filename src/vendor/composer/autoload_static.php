<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitafed990c56f4ebc8edbe605dcc24b36f
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Src\\' => 4,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Src\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/../app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitafed990c56f4ebc8edbe605dcc24b36f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitafed990c56f4ebc8edbe605dcc24b36f::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}