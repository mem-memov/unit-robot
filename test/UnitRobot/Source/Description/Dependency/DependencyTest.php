<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Description\Dependency;

use MemMemov\UnitRobot\Source\Description\Property\ObjectCollectionProperty;
use MemMemov\UnitRobot\Source\Description\Property\Properties;
use MemMemov\UnitRobot\Source\Description\Parameter\ObjectCollectionParameter;
use MemMemov\UnitRobot\Source\Description\Parameter\Parameters;
use MemMemov\UnitRobot\Source\Description\Type\Collection\ObjectArrayType;
use MemMemov\UnitRobot\Source\Description\Type\Types;
use MemMemov\UnitRobot\UnitTest\UnitTest;
use PHPUnit\Framework\TestCase;

final class DependencyTest extends TestCase
{
    protected $namespace;
    protected $class;
    protected $alias;

    protected function setUp(): void
    {
        $this->namespace = 'some $this->namespace value';
        $this->class = 'some $this->class value';
        $this->alias = 'some $this->alias value';
    }

}