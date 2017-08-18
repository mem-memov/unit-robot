<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Description;

use PHPUnit\Framework\TestCase;

final class InstanceDependenciesTest extends TestCase
{
    public function testItCanAddDependency(): void
    {
        $instanceDependencies = new InstanceDependencies();

        $dependency = $this->createMock(Dependency::class);

        $instanceDependencies->addDependency($dependency);
    }
}