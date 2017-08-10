<?php
namespace MemMemov\UnitRobot;

use MemMemov\UnitRobot\Source\Directories as SourceDirectories;

require __DIR__ . '/../vendor/autoload.php';

$configuration = require __DIR__ . '/../unit-robot.config.php';

$unitRobot = new UnitRobot(
    new Configuration(
        $configuration,
        new SourceDirectories()
    )
);

$unitRobot->createTests();