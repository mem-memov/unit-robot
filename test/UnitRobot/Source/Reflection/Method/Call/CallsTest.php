<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Reflection\Method\Call;

use PHPUnit\Framework\TestCase;

final class CallsTest extends TestCase
{
    protected $positionings;

    protected function setUp(): void
    {
        $this->positionings = $this->createMock(Positionings::class);
    }

    public function testItCanCreateMethodCalls(): void
    {
        $calls = new Calls($this->positionings);

        $methodString = 'some $methodString value';

        $calls->createMethodCalls($methodString);
    }
}