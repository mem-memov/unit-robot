<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Description\Instance;

use MemMemov\UnitRobot\Source\Description\Signature\Signature;
use MemMemov\UnitRobot\UnitTest\UnitTest;
use PHPUnit\Framework\TestCase;

final class InstanceMethodsTest extends TestCase
{
    public function testItCanAddSignature(): void
    {
        $instanceMethods = new InstanceMethods();

        $signature = $this->createMock(Signature::class);

        $instanceMethods->addSignature($signature);
    }

    public function testItCanCreateUnitTests(): void
    {
        $instanceMethods = new InstanceMethods();

        $unitTest = $this->createMock(UnitTest::class);
        $class = 'some $class value';

        $instanceMethods->createUnitTests($unitTest, $class);
    }
}