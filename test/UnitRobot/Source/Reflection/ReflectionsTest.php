<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Reflection;

use MemMemov\UnitRobot\Source\Reflection\Constructor\ClassConstructors;
use MemMemov\UnitRobot\Source\Reflection\Method\Methods;
use MemMemov\UnitRobot\UnitTest\UnitTests;
use MemMemov\UnitRobot\Source\Description\Dependency\Dependencies as DescriptionDependencies;
use PHPUnit\Framework\TestCase;

final class ReflectionsTest extends TestCase
{
    public function testItCanCreateReflection(): void
    {
        $reflections = new Reflections();

        $className = 'some $className value';

        $reflections->createReflection($className);
    }
}