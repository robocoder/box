<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcaffaac692d968a006dd797059b6a978
{
    public static $prefixLengthsPsr4 = array (
        '_' => 
        array (
            '_HumbugBoxacafcfe30294\\KevinGH\\RequirementChecker\\' => 50,
            '_HumbugBoxacafcfe30294\\Composer\\Semver\\' => 39,
        ),
    );

    public static $prefixDirsPsr4 = array (
        '_HumbugBoxacafcfe30294\\KevinGH\\RequirementChecker\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        '_HumbugBoxacafcfe30294\\Composer\\Semver\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/semver/src',
        ),
    );

    public static $classMap = array (
        '_HumbugBoxacafcfe30294\\Composer\\Semver\\Comparator' => __DIR__ . '/..' . '/composer/semver/src/Comparator.php',
        '_HumbugBoxacafcfe30294\\Composer\\Semver\\Constraint\\AbstractConstraint' => __DIR__ . '/..' . '/composer/semver/src/Constraint/AbstractConstraint.php',
        '_HumbugBoxacafcfe30294\\Composer\\Semver\\Constraint\\Constraint' => __DIR__ . '/..' . '/composer/semver/src/Constraint/Constraint.php',
        '_HumbugBoxacafcfe30294\\Composer\\Semver\\Constraint\\ConstraintInterface' => __DIR__ . '/..' . '/composer/semver/src/Constraint/ConstraintInterface.php',
        '_HumbugBoxacafcfe30294\\Composer\\Semver\\Constraint\\EmptyConstraint' => __DIR__ . '/..' . '/composer/semver/src/Constraint/EmptyConstraint.php',
        '_HumbugBoxacafcfe30294\\Composer\\Semver\\Constraint\\MultiConstraint' => __DIR__ . '/..' . '/composer/semver/src/Constraint/MultiConstraint.php',
        '_HumbugBoxacafcfe30294\\Composer\\Semver\\Semver' => __DIR__ . '/..' . '/composer/semver/src/Semver.php',
        '_HumbugBoxacafcfe30294\\Composer\\Semver\\VersionParser' => __DIR__ . '/..' . '/composer/semver/src/VersionParser.php',
        '_HumbugBoxacafcfe30294\\KevinGH\\RequirementChecker\\Checker' => __DIR__ . '/../..' . '/src/Checker.php',
        '_HumbugBoxacafcfe30294\\KevinGH\\RequirementChecker\\IO' => __DIR__ . '/../..' . '/src/IO.php',
        '_HumbugBoxacafcfe30294\\KevinGH\\RequirementChecker\\IsExtensionFulfilled' => __DIR__ . '/../..' . '/src/IsExtensionFulfilled.php',
        '_HumbugBoxacafcfe30294\\KevinGH\\RequirementChecker\\IsFulfilled' => __DIR__ . '/../..' . '/src/IsFulfilled.php',
        '_HumbugBoxacafcfe30294\\KevinGH\\RequirementChecker\\IsPhpVersionFulfilled' => __DIR__ . '/../..' . '/src/IsPhpVersionFulfilled.php',
        '_HumbugBoxacafcfe30294\\KevinGH\\RequirementChecker\\Printer' => __DIR__ . '/../..' . '/src/Printer.php',
        '_HumbugBoxacafcfe30294\\KevinGH\\RequirementChecker\\Requirement' => __DIR__ . '/../..' . '/src/Requirement.php',
        '_HumbugBoxacafcfe30294\\KevinGH\\RequirementChecker\\RequirementCollection' => __DIR__ . '/../..' . '/src/RequirementCollection.php',
        '_HumbugBoxacafcfe30294\\KevinGH\\RequirementChecker\\Terminal' => __DIR__ . '/../..' . '/src/Terminal.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcaffaac692d968a006dd797059b6a978::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcaffaac692d968a006dd797059b6a978::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitcaffaac692d968a006dd797059b6a978::$classMap;

        }, null, ClassLoader::class);
    }
}
