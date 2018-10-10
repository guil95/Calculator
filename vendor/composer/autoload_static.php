<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita4ebc8ee85ed847abad3f0556926f2c8
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Test\\' => 5,
        ),
        'C' => 
        array (
            'Calculator\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Test\\' => 
        array (
            0 => __DIR__ . '/../..' . '/test',
        ),
        'Calculator\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita4ebc8ee85ed847abad3f0556926f2c8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita4ebc8ee85ed847abad3f0556926f2c8::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}