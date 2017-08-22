<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Description\Instance;

use PHPUnit\Framework\TestCase;

final class InstanciesTest extends TestCase
{
    public function testItCanCreateInstance(): void
    {
        $instancies = new Instancies();

        $name = $this->createMock(InstanceName::class);
        $properties = $this->createMock(InstanceProperties::class);
        $methods = $this->createMock(InstanceMethods::class);
        $dependencies = $this->createMock(InstanceDependencies::class);

        $instancies->createInstance($name, $properties, $methods, $dependencies);
    }

    public function testItCanCreateInstanceName(): void
    {
        $instancies = new Instancies();

        $namespace = 'some $namespace value';
        $class = 'some $class value';

        $instancies->createInstanceName($namespace, $class);
    }

    public function testItCanCreateInstanceProperties(): void
    {
        $instancies = new Instancies();

        $instancies->createInstanceProperties();
    }

    public function testItCanCreateInstanceMethods(): void
    {
        $instancies = new Instancies();

        $instancies->createInstanceMethods();
    }

    public function testItCanCreateInstanceDependencies(): void
    {
        $instancies = new Instancies();

        $instancies->createInstanceDependencies();
    }
}