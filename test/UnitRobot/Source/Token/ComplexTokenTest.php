<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Token;

use PHPUnit\Framework\TestCase;

final class ComplexTokenTest extends TestCase
{
    protected $code;
    protected $name;
    protected $string;
    protected $line;

    protected function setUp(): void
    {
        $this->code = 5;
        $this->name = 'some name value';
        $this->string = 'some string value';
        $this->line = 5;
    }

    public function testItCanHasVariable(): void
    {
    }

    public function testItCanIsTypePart(): void
    {
    }

    public function testItCanGetString(): void
    {
    }

    public function testItCanToString(): void
    {
    }
}