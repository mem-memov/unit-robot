<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Description;

use PHPUnit\Framework\TestCase;

final class InstanceNameTest extends TestCase
{
    public function testItCanSetNamespace(): void
    {
        $instanceName = new InstanceName();

        $namespace = 'some $namespace value';

        $instanceName->setNamespace($namespace);
    }

    public function testItCanSetClass(): void
    {
        $instanceName = new InstanceName();

        $class = 'some $class value';

        $instanceName->setClass($class);
    }
}