<?php
namespace MemMemov\UnitRobot;

require __DIR__ . '/../vendor/autoload.php';

$configuration = require __DIR__ . '/../unit-robot.config.php';

$unitRobot = new UnitRobot(
    new Configuration($configuration)
);

$unitRobot->createTests();