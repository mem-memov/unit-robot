<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Token;

use PHPUnit\Framework\TestCase;

final class ComplexTokenTest extends TestCase
{
    public function testItCanHasVariable(): void
    {
        $complexToken = new ComplexToken();

        $value = 'some $value value';

        $complexToken->hasVariable($value);
    }

    public function testItCanIsTypePart(): void
    {
        $complexToken = new ComplexToken();

        $complexToken->isTypePart();
    }

    public function testItCanGetString(): void
    {
        $complexToken = new ComplexToken();

        $complexToken->getString();
    }

    public function testItCanToString(): void
    {
        $complexToken = new ComplexToken();

        $complexToken->toString();
    }
}