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
        $this->code = $this->createMock(int::class);
        $this->name = $this->createMock(string::class);
        $this->string = $this->createMock(string::class);
        $this->line = $this->createMock(int::class);
    }

    public function testItCanHasVariable(): void
    {
    }

    public function testItCanIsWhitespace(): void
    {
    }

    public function testItCanIsString(): void
    {
    }

    public function testItCanGetString(): void
    {
    }

    public function testItCanToString(): void
    {
    }
}