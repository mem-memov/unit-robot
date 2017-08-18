<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Reflection;

use MemMemov\UnitRobot\Source\Reflection\Method\Methods;
use MemMemov\UnitRobot\UnitTest\UnitTests;
use MemMemov\UnitRobot\Source\Description\Dependencies as DescriptionDependencies;
use PHPUnit\Framework\TestCase;

final class ReflectionsTest extends TestCase
{
    protected $methods;
    protected $unitTests;
    protected $descriptionDependencies;

    protected function setUp(): void
    {
        $this->methods = $this->createMock(Methods::class);
        $this->unitTests = $this->createMock(UnitTests::class);
        $this->descriptionDependencies = $this->createMock(DescriptionDependencies::class);
    }

    public function testItCanCreateReflection(): void
    {
        $reflections = new Reflections($this->methods, $this->unitTests, $this->descriptionDependencies);

        $className = 'some $className value';

        $reflections->createReflection($className);
    }
}