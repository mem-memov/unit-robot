<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Token;

use PHPUnit\Framework\TestCase;

final class SimpleTokenTest extends TestCase
{
    protected $string;

    protected function setUp(): void
    {
        $this->string = $this->createMock(string::class);
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