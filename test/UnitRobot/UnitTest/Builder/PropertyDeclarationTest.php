<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\UnitTest\Builder;

use MemMemov\UnitRobot\UnitTest\File\Text;
use PHPUnit\Framework\TestCase;

final class PropertyDeclarationTest extends TestCase
{
    protected $type;
    protected $name;

    protected function setUp(): void
    {
        $this->type = 'some $this->type value';
        $this->name = 'some $this->name value';
    }

}