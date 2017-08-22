<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Reflection\Parameter;

use MemMemov\UnitRobot\Source\Token\MethodSignature as SignatureTokens;
use MemMemov\UnitRobot\Source\Description\Property\Properties as DescriptionProperties;
use MemMemov\UnitRobot\Source\Description\Parameter\Parameters as DescriptionParameters;
use MemMemov\UnitRobot\Source\Reflection\Comment\MethodComment;
use MemMemov\UnitRobot\Source\Reflection\Comment\ParameterComment;
use MemMemov\UnitRobot\Source\Description\Instance\Instancies;
use MemMemov\UnitRobot\Source\Description\Signature\Signatures;
use PHPUnit\Framework\TestCase;

final class ParametersTest extends TestCase
{
    protected $descriptionProperties;
    protected $descriptionParameters;
    protected $instances;
    protected $signatures;

    protected function setUp(): void
    {
        $this->descriptionProperties = $this->createMock(DescriptionProperties::class);
        $this->descriptionParameters = $this->createMock(DescriptionParameters::class);
        $this->instances = $this->createMock(Instancies::class);
        $this->signatures = $this->createMock(Signatures::class);
    }

    public function testItCanCreateMethodParameters(): void
    {
        $parameters = new Parameters($this->descriptionProperties, $this->descriptionParameters, $this->instances, $this->signatures);

        $parameterReflections = [];
        $tokens = $this->createMock(SignatureTokens::class);
        $methodComment = $this->createMock(MethodComment::class);

        $parameters->createMethodParameters($parameterReflections, $tokens, $methodComment);
    }
}