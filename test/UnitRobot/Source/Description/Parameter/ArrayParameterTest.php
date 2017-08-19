<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Description\Parameter;

use MemMemov\UnitRobot\Source\Description\Type\Collection\MixedArrayType;
use PHPUnit\Framework\TestCase;

final class ArrayParameterTest extends TestCase
{
    protected $name;

    protected function setUp(): void
    {
        $this->name = 'some $this->name value';
    }

}