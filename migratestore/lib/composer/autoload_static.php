<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6a9a57a12992ec950b7e0660dbb0e8f3
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MigrateStore\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MigrateStore\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'MigrateStore\\Exporters\\AbstractExporter' => __DIR__ . '/../..' . '/includes/Exporters/AbstractExporter.php',
        'MigrateStore\\Exporters\\WooCommerce\\AccountsPrivacyExporter' => __DIR__ . '/../..' . '/includes/Exporters/WooCommerce/AccountsPrivacyExporter.php',
        'MigrateStore\\Exporters\\WooCommerce\\EmailsOptionsExporter' => __DIR__ . '/../..' . '/includes/Exporters/WooCommerce/EmailsOptionsExporter.php',
        'MigrateStore\\Exporters\\WooCommerce\\EndpointsExporter' => __DIR__ . '/../..' . '/includes/Exporters/WooCommerce/EndpointsExporter.php',
        'MigrateStore\\Exporters\\WooCommerce\\GeneralSettingsExporter' => __DIR__ . '/../..' . '/includes/Exporters/WooCommerce/GeneralSettingsExporter.php',
        'MigrateStore\\Exporters\\WooCommerce\\ShippingOptionsExporter' => __DIR__ . '/../..' . '/includes/Exporters/WooCommerce/ShippingOptionsExporter.php',
        'MigrateStore\\Exporters\\WooCommerce\\ShippingZonesExporter' => __DIR__ . '/../..' . '/includes/Exporters/WooCommerce/ShippingZonesExporter.php',
        'MigrateStore\\Exporters\\WooCommerce\\TaxOptionsExporter' => __DIR__ . '/../..' . '/includes/Exporters/WooCommerce/TaxOptionsExporter.php',
        'MigrateStore\\Importers\\AbstractImporter' => __DIR__ . '/../..' . '/includes/Importers/AbstractImporter.php',
        'MigrateStore\\Importers\\WooCommerce\\AccountsPrivacyImporter' => __DIR__ . '/../..' . '/includes/Importers/WooCommerce/AccountsPrivacyImporter.php',
        'MigrateStore\\Importers\\WooCommerce\\EmailsOptionsImporter' => __DIR__ . '/../..' . '/includes/Importers/WooCommerce/EmailsOptionsImporter.php',
        'MigrateStore\\Importers\\WooCommerce\\EndpointsImporter' => __DIR__ . '/../..' . '/includes/Importers/WooCommerce/EndpointsImporter.php',
        'MigrateStore\\Importers\\WooCommerce\\GeneralSettingsImporter' => __DIR__ . '/../..' . '/includes/Importers/WooCommerce/GeneralSettingsImporter.php',
        'MigrateStore\\Importers\\WooCommerce\\ShippingOptionsImporter' => __DIR__ . '/../..' . '/includes/Importers/WooCommerce/ShippingOptionsImporter.php',
        'MigrateStore\\Importers\\WooCommerce\\ShippingZonesImporter' => __DIR__ . '/../..' . '/includes/Importers/WooCommerce/ShippingZonesImporter.php',
        'MigrateStore\\Importers\\WooCommerce\\TaxOptionsImporter' => __DIR__ . '/../..' . '/includes/Importers/WooCommerce/TaxOptionsImporter.php',
        'MigrateStore\\MigrateStore' => __DIR__ . '/../..' . '/includes/MigrateStore.php',
        'MigrateStore\\Plugins_Checker' => __DIR__ . '/../..' . '/includes/Plugins_Checker.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6a9a57a12992ec950b7e0660dbb0e8f3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6a9a57a12992ec950b7e0660dbb0e8f3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6a9a57a12992ec950b7e0660dbb0e8f3::$classMap;

        }, null, ClassLoader::class);
    }
}