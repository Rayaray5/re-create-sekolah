<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf7f26a9c69d6ddc6c8a0bc8018ccfc29
{
    public static $files = array (
        'c30ea3c36f720292a01aec246429d009' => __DIR__ . '/..' . '/codeinwp/themeisle-sdk/load.php',
    );

    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Riverbank\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Riverbank\\' => 
        array (
            0 => __DIR__ . '/../..' . '/inc',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Riverbank\\Admin' => __DIR__ . '/../..' . '/inc/Admin.php',
        'Riverbank\\Assets_Manager' => __DIR__ . '/../..' . '/inc/Assets_Manager.php',
        'Riverbank\\Block_Patterns' => __DIR__ . '/../..' . '/inc/Block_Patterns.php',
        'Riverbank\\Block_Styles' => __DIR__ . '/../..' . '/inc/Block_Styles.php',
        'Riverbank\\Constants' => __DIR__ . '/../..' . '/inc/Constants.php',
        'Riverbank\\Core' => __DIR__ . '/../..' . '/inc/Core.php',
        'Riverbank\\Starter_Content' => __DIR__ . '/../..' . '/inc/Starter_Content.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf7f26a9c69d6ddc6c8a0bc8018ccfc29::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf7f26a9c69d6ddc6c8a0bc8018ccfc29::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf7f26a9c69d6ddc6c8a0bc8018ccfc29::$classMap;

        }, null, ClassLoader::class);
    }
}
