<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Description\Instance;

use MemMemov\UnitRobot\UnitTest\UnitTest;
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

}