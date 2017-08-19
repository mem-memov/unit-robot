<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Description;

use PHPUnit\Framework\TestCase;

final class DependencyCollectionPropertyTest extends TestCase
{
    protected $name;
    protected $dependency;

    protected function setUp(): void
    {
        $this->name = 'some $this->name value';
        $this->dependency = $this->createMock(Dependency::class);
    }

}