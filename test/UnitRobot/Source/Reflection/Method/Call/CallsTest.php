<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Reflection\Method\Call;

use MemMemov\UnitRobot\Source\Reflection\Method\Call\Parser\Parser;
use MemMemov\UnitRobot\Source\Reflection\Method\Call\Type\CallTypes;
use MemMemov\UnitRobot\Source\Reflection\Method\Call\Variable\Variables;
use PHPUnit\Framework\TestCase;

final class CallsTest extends TestCase
{
    protected $parser;
    protected $positionings;
    protected $callTypes;
    protected $variables;

    protected function setUp(): void
    {
        $this->parser = $this->createMock(Parser::class);
        $this->positionings = $this->createMock(Positionings::class);
        $this->callTypes = $this->createMock(CallTypes::class);
        $this->variables = $this->createMock(Variables::class);
    }

    public function testItCanCreateMethodCalls(): void
    {
        $calls = new Calls($this->parser, $this->positionings, $this->callTypes, $this->variables);

        $methodString = 'some $methodString value';

        $calls->createMethodCalls($methodString);
    }
}