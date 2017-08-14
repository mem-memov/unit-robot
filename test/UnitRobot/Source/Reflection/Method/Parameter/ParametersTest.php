<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Reflection\Method\Parameter;

use MemMemov\UnitRobot\Source\Token\MethodSignature as SignatureTokens;
use PHPUnit\Framework\TestCase;

final class ParametersTest extends TestCase
{
    public function testItCanCreateMethodParameters(): void
    {
        $parameters = new Parameters();

        $parameterReflections = [];
        $tokens = $this->createMock(SignatureTokens::class);

        $parameters->createMethodParameters($parameterReflections, $tokens);
    }
}