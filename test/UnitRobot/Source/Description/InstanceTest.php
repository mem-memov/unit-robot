<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Description;

use PHPUnit\Framework\TestCase;

final class InstanceTest extends TestCase
{
    protected $name;
    protected $properties;
    protected $methods;
    protected $dependencies;

    protected function setUp(): void
    {
        $this->name = $this->createMock(InstanceName::class);
        $this->properties = $this->createMock(InstanceProperties::class);
        $this->methods = $this->createMock(InstanceMethods::class);
        $this->dependencies = $this->createMock(InstanceDependencies::class);
    }

    public function testItCanGetName(): void
    {
        $instance = new Instance($this->name, $this->properties, $this->methods, $this->dependencies);

        $instance->getName();
    }

    public function testItCanGetProperties(): void
    {
        $instance = new Instance($this->name, $this->properties, $this->methods, $this->dependencies);

        $instance->getProperties();
    }

    public function testItCanGetMethods(): void
    {
        $instance = new Instance($this->name, $this->properties, $this->methods, $this->dependencies);

        $instance->getMethods();
    }

    public function testItCanGetDependencies(): void
    {
        $instance = new Instance($this->name, $this->properties, $this->methods, $this->dependencies);

        $instance->getDependencies();
    }
}