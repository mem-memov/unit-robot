<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Description\Instance;

use MemMemov\UnitRobot\Source\Description\Dependency\Dependency;
use MemMemov\UnitRobot\UnitTest\UnitTest;
use PHPUnit\Framework\TestCase;

final class InstanceDependenciesTest extends TestCase
{
    public function testItCanAddDependency(): void
    {
        $instanceDependencies = new InstanceDependencies();

        $dependency = $this->createMock(Dependency::class);

        $instanceDependencies->addDependency($dependency);
    }

    public function testItCanHas(): void
    {
        $instanceDependencies = new InstanceDependencies();

        $query = 'some $query value';

        $instanceDependencies->has($query);
    }

    public function testItCanGet(): void
    {
        $instanceDependencies = new InstanceDependencies();

        $query = 'some $query value';

        $instanceDependencies->get($query);
    }

    public function testItCanCreateUnitTests(): void
    {
        $instanceDependencies = new InstanceDependencies();

        $unitTest = $this->createMock(UnitTest::class);

        $instanceDependencies->createUnitTests($unitTest);
    }
}