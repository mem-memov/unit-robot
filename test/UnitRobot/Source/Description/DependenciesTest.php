<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Description;

use PHPUnit\Framework\TestCase;

final class DependenciesTest extends TestCase
{
    public function testItCanCreateDependency(): void
    {
        $dependencies = new Dependencies();

        $namespace = 'some $namespace value';
        $class = 'some $class value';
        $alias = 'some $alias value';

        $dependencies->createDependency($namespace, $class, $alias);
    }
}