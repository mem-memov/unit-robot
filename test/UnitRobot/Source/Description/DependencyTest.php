<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Description;

use PHPUnit\Framework\TestCase;

final class DependencyTest extends TestCase
{
    protected $name;
    protected $alias;

    protected function setUp(): void
    {
        $this->name = $this->createMock(InstanceName::class);
        $this->alias = 'some $this->alias value';
    }

}