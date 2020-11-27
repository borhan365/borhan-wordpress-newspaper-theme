<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit336d7f925412b0591e68f882207d9be6
{
    public static $files = array (
        '6140462a28dd2f69ae18a993969ccd1a' => __DIR__ . '/../..' . '/inc/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Azad_News\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Azad_News\\' => 
        array (
            0 => __DIR__ . '/../..' . '/inc',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit336d7f925412b0591e68f882207d9be6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit336d7f925412b0591e68f882207d9be6::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}