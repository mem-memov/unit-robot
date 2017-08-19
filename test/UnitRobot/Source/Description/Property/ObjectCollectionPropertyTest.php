<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Description\Property;

use PHPUnit\Framework\TestCase;

final class ObjectCollectionPropertyTest extends TestCase
{
    protected $name;
    protected $type;

    protected function setUp(): void
    {
        $this->name = 'some $this->name value';
        $this->type = 'some $this->type value';
    }

}