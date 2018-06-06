<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit67ebcda79e75b449abeb53169c760637
{
    public static $prefixLengthsPsr4 = array (
        'O' => 
        array (
            'Orm\\' => 4,
        ),
        'M' => 
        array (
            'Model\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Orm\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Model\\' => 
        array (
            0 => __DIR__ . '/../..' . '/examples/Model',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit67ebcda79e75b449abeb53169c760637::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit67ebcda79e75b449abeb53169c760637::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
