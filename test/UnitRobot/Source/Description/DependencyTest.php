<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Description;

use PHPUnit\Framework\TestCase;

final class DependencyTest extends TestCase
{
    protected $namespace;
    protected $class;
    protected $alias;

    protected function setUp(): void
    {
        $this->namespace = 'some $this->namespace value';
        $this->class = 'some $this->class value';
        $this->alias = 'some $this->alias value';
    }

    public function testItCanIsMatching(): void
    {
        $dependency = new Dependency($this->namespace, $this->class, $this->alias);

        $query = 'some $query value';

        $dependency->isMatching($query);
    }
}