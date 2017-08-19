<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Reflection\Method\Call;

use MemMemov\UnitRobot\Source\Reflection\Method\Call\Parser\Parser;
use MemMemov\UnitRobot\Source\Reflection\Method\Call\Type\CallTypes;
use MemMemov\UnitRobot\Source\Reflection\Method\Call\Variable\Variables;
use PHPUnit\Framework\TestCase;

final class CallsTest extends TestCase
{
    public function testItCanCreateMethodCalls(): void
    {
        $calls = new Calls();

        $methodString = 'some $methodString value';

        $this->parsedMatches = 'some $this->parsedMatches value';

        $this->parser->expects($this->once())
            ->method('parseMethod')
            ->willReturn($this->parsedMatches);

        $parsedMatches->expects($this->once())
            ->method('fillCallPositionings');

        $parsedMatches->expects($this->once())
            ->method('fillMethodCalls');

        $calls->createMethodCalls($methodString);
    }
}