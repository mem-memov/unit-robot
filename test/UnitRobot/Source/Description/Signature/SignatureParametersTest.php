<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Description\Signature;

use MemMemov\UnitRobot\Source\Description\Parameter\Parameter;
use MemMemov\UnitRobot\UnitTest\MethodParameters as UnitTestMethodParameters;
use MemMemov\UnitRobot\UnitTest\Builder\Declarations as UnitTestDeclarations;
use MemMemov\UnitRobot\UnitTest\Builder\ParameterDeclarations as UnitTestParameterDeclarations;
use PHPUnit\Framework\TestCase;

final class SignatureParametersTest extends TestCase
{
    public function testItCanAddParameter(): void
    {
        $signatureParameters = new SignatureParameters();

        $parameter = $this->createMock(Parameter::class);

        $signatureParameters->addParameter($parameter);
    }

    public function testItCanFillUnitTestMethod(): void
    {
        $signatureParameters = new SignatureParameters();

        $declarations = $this->createMock(UnitTestDeclarations::class);
        $parameterDeclarations = $this->createMock(UnitTestParameterDeclarations::class);

        $signatureParameters->fillUnitTestMethod($declarations, $parameterDeclarations);
    }
}