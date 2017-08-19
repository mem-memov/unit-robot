<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Description\Instance;

use PHPUnit\Framework\TestCase;

final class InstanceTest extends TestCase
{
    public function testItCanGetName(): void
    {
        $instance = new Instance();

        $instance->getName();
    }

    public function testItCanGetProperties(): void
    {
        $instance = new Instance();

        $instance->getProperties();
    }

    public function testItCanGetMethods(): void
    {
        $instance = new Instance();

        $instance->getMethods();
    }

    public function testItCanGetDependencies(): void
    {
        $instance = new Instance();

        $instance->getDependencies();
    }
}