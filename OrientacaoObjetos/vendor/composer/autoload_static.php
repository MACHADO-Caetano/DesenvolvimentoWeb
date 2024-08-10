<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita83fb23d0947468cc36eeae77af771ce
{
    public static $prefixLengthsPsr4 = array (
        'U' => 
        array (
            'Usuario\\OrientacaoObjetos\\' => 26,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Usuario\\OrientacaoObjetos\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita83fb23d0947468cc36eeae77af771ce::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita83fb23d0947468cc36eeae77af771ce::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita83fb23d0947468cc36eeae77af771ce::$classMap;

        }, null, ClassLoader::class);
    }
}