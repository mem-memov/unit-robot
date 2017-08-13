<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Token;

use PHPUnit\Framework\TestCase;

final class SimpleTokenTest extends TestCase
{
    protected $string;

    protected function setUp(): void
    {
        $this->string = 'some string value';
    }

    public function testItCanHasVariable(): void
    {
        $simpleToken = new SimpleToken($this->string);
    }

    public function testItCanIsTypePart(): void
    {
        $simpleToken = new SimpleToken($this->string);
    }

    public function testItCanGetString(): void
    {
        $simpleToken = new SimpleToken($this->string);
    }

    public function testItCanToString(): void
    {
        $simpleToken = new SimpleToken($this->string);
    }
}