<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Description;

use PHPUnit\Framework\TestCase;

final class DependencyTest extends TestCase
{
    public function testItCanIsMatching(): void
    {
        $dependency = new Dependency();

        $query = 'some $query value';

        $dependency->isMatching($query);
    }
}