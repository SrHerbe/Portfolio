<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8857b038571d9a49045ad3a2bf87d598
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit8857b038571d9a49045ad3a2bf87d598::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8857b038571d9a49045ad3a2bf87d598::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8857b038571d9a49045ad3a2bf87d598::$classMap;

        }, null, ClassLoader::class);
    }
}
