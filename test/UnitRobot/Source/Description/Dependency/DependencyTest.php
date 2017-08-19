<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Description\Dependency;

use MemMemov\UnitRobot\Source\Description\Property\ObjectCollectionProperty;
use MemMemov\UnitRobot\Source\Description\Property\Properties;
use PHPUnit\Framework\TestCase;

final class DependencyTest extends TestCase
{
    public function testItCanIsMatching(): void
    {
        $dependency = new Dependency();

        $query = 'some $query value';

        $dependency->isMatching($query);
    }

    public function testItCanCreateObjectCollectionProperty(): void
    {
        $dependency = new Dependency();

        $name = 'some $name value';
        $properties = $this->createMock(Properties::class);

        $dependency->createObjectCollectionProperty($name, $properties);
    }
}