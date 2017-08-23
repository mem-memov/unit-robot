# unit-robot
Automated unit test creation

[![Build Status](https://travis-ci.org/mem-memov/unit-robot.svg?branch=master)](https://travis-ci.org/mem-memov/unit-robot)

To install via Composer:
```
composer require mem-memov/unit-robot --dev
```
To prepare tests for every class:
```
./bin/unit-robot
```
To prepare a test for one class:
```
./bin/unit-robot --class="MemMemov\UnitRobot\UnitTest\Builder\PhpDeclaration"
```
Put source and test directories into the config file:

unit-robot.config.php

```php
<?php
return [
    'sourcePath' => __DIR__.'/src',
    'testPath' => __DIR__.'/test'
];
```
