<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Description\Property;

use PHPUnit\Framework\TestCase;

final class ObjectPropertyTest extends TestCase
{
    protected $name;
    protected $namespace;
    protected $class;
    protected $alias;

    protected function setUp(): void
    {
        $this->name = 'some $this->name value';
        $this->namespace = 'some $this->namespace value';
        $this->class = 'some $this->class value';
        $this->alias = 'some $this->alias value';
    }

}