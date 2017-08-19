<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Description\Property;

use PHPUnit\Framework\TestCase;

final class ScalarPropertyTest extends TestCase
{
    protected $name;

    protected function setUp(): void
    {
        $this->name = 'some $this->name value';
    }

}