<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3046e8c42bde92b8c2d990c2f6dd9601
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Container\\' => 14,
        ),
        'L' => 
        array (
            'League\\Container\\' => 17,
        ),
        'I' => 
        array (
            'Interop\\Container\\' => 18,
        ),
        'G' => 
        array (
            'Gibbon\\' => 7,
        ),
        'A' => 
        array (
            'Aura\\SqlQuery\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'League\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/container/src',
        ),
        'Interop\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/container-interop/container-interop/src/Interop/Container',
        ),
        'Gibbon\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
            1 => __DIR__ . '/../..' . '/src/Gibbon',
        ),
        'Aura\\SqlQuery\\' => 
        array (
            0 => __DIR__ . '/..' . '/aura/sqlquery/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3046e8c42bde92b8c2d990c2f6dd9601::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3046e8c42bde92b8c2d990c2f6dd9601::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}