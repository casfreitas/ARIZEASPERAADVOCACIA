<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfdb8bd6a0abcee0339367ac13d78340a
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfdb8bd6a0abcee0339367ac13d78340a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfdb8bd6a0abcee0339367ac13d78340a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfdb8bd6a0abcee0339367ac13d78340a::$classMap;

        }, null, ClassLoader::class);
    }
}
