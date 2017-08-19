<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Description\Type;

use PHPUnit\Framework\TestCase;

final class ObjectTypeTest extends TestCase
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

}