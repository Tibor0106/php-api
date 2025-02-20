<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit27890546f9671c70e5e3e4f1d5d6a970
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit27890546f9671c70e5e3e4f1d5d6a970::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit27890546f9671c70e5e3e4f1d5d6a970::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit27890546f9671c70e5e3e4f1d5d6a970::$classMap;

        }, null, ClassLoader::class);
    }
}
