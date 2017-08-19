<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Token;

use PHPUnit\Framework\TestCase;

final class SimpleTokenTest extends TestCase
{
    public function testItCanHasVariable(): void
    {
        $simpleToken = new SimpleToken();

        $value = 'some $value value';

        $simpleToken->hasVariable($value);
    }

    public function testItCanIsTypePart(): void
    {
        $simpleToken = new SimpleToken();

        $simpleToken->isTypePart();
    }

    public function testItCanGetString(): void
    {
        $simpleToken = new SimpleToken();

        $simpleToken->getString();
    }

    public function testItCanToString(): void
    {
        $simpleToken = new SimpleToken();

        $simpleToken->toString();
    }
}