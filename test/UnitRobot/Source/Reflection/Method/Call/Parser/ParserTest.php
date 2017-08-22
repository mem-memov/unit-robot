<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Reflection\Method\Call\Parser;

use PHPUnit\Framework\TestCase;

final class ParserTest extends TestCase
{
    public function testItCanParseMethod(): void
    {
        $parser = new Parser();

        $methodString = 'some $methodString value';

        $parser->parseMethod($methodString);
    }
}