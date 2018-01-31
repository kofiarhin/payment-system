<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitaa48d756701237cb13f51fe3b87fea35
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'Braintree\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Braintree\\' => 
        array (
            0 => __DIR__ . '/..' . '/braintree/braintree_php/lib/Braintree',
        ),
    );

    public static $prefixesPsr0 = array (
        'B' => 
        array (
            'Braintree' => 
            array (
                0 => __DIR__ . '/..' . '/braintree/braintree_php/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitaa48d756701237cb13f51fe3b87fea35::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitaa48d756701237cb13f51fe3b87fea35::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitaa48d756701237cb13f51fe3b87fea35::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
