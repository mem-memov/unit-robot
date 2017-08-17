<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Description;

use PHPUnit\Framework\TestCase;

final class InstanceTest extends TestCase
{
    protected $name;
    protected $properties;
    protected $methods;

    protected function setUp(): void
    {
        $this->name = $this->createMock(InstanceName::class);
        $this->properties = $this->createMock(InstanceProperties::class);
        $this->methods = $this->createMock(InstanceMethods::class);
    }

}