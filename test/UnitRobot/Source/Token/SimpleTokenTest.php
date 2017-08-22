<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Token;

use PHPUnit\Framework\TestCase;

final class SimpleTokenTest extends TestCase
{
    protected $string;

    protected function setUp(): void
    {
        $this->string = 'some $this->string value';
    }

    public function testItCanHasVariable(): void
    {
        $simpleToken = new SimpleToken($this->string);

        $value = 'some $value value';

        $simpleToken->hasVariable($value);
    }

    public function testItCanIsTypePart(): void
    {
        $simpleToken = new SimpleToken($this->string);

        $simpleToken->isTypePart();
    }

    public function testItCanGetString(): void
    {
        $simpleToken = new SimpleToken($this->string);

        $simpleToken->getString();
    }

    public function testItCanToString(): void
    {
        $simpleToken = new SimpleToken($this->string);

        $simpleToken->toString();
    }
}