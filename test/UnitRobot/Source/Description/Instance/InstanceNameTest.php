<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Description\Instance;

use MemMemov\UnitRobot\UnitTest\UnitTest;
use PHPUnit\Framework\TestCase;

final class InstanceNameTest extends TestCase
{
    protected $namespace;
    protected $class;

    protected function setUp(): void
    {
        $this->namespace = 'some $this->namespace value';
        $this->class = 'some $this->class value';
    }

    public function testItCanCreateUnitTests(): void
    {
        $instanceName = new InstanceName($this->namespace, $this->class);

        $unitTest = $this->createMock(UnitTest::class);

        $instanceName->createUnitTests($unitTest);
    }

    public function testItCanGetShortClassName(): void
    {
        $instanceName = new InstanceName($this->namespace, $this->class);

        $instanceName->getShortClassName();
    }
}