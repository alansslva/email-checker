<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5ff2785b6bc96199105af2af659aaa25
{
    public static $prefixLengthsPsr4 = array (
        'h' => 
        array (
            'hbattat\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'hbattat\\' => 
        array (
            0 => __DIR__ . '/..' . '/hbattat/verifyemail/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5ff2785b6bc96199105af2af659aaa25::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5ff2785b6bc96199105af2af659aaa25::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
