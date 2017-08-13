<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Reflection;

use MemMemov\UnitRobot\Source\Token\MethodSignature as SignatureTokens;
use PHPUnit\Framework\TestCase;

final class ParametersTest extends TestCase
{
    public function testItCanCreateMethodParameters(): void
    {
        $parameters = new Parameters();

        $parameters->createMethodParameters($parameterReflections, $tokens);
    }
}