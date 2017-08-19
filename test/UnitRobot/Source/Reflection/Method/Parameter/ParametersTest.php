<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Reflection\Method\Parameter;

use MemMemov\UnitRobot\Source\Token\MethodSignature as SignatureTokens;
use MemMemov\UnitRobot\Source\Description\Property\Properties as DescriptionProperties;
use MemMemov\UnitRobot\Source\Reflection\Method\MethodComment;
use PHPUnit\Framework\TestCase;

final class ParametersTest extends TestCase
{
    protected $descriptionProperties;

    protected function setUp(): void
    {
        $this->descriptionProperties = $this->createMock(DescriptionProperties::class);
    }

    public function testItCanCreateMethodParameters(): void
    {
        $parameters = new Parameters($this->descriptionProperties);

        $parameterReflections = [];
        $tokens = $this->createMock(SignatureTokens::class);
        $methodComment = $this->createMock(MethodComment::class);

        $type = 'some $type value';

        $tokens->expects($this->once())
            ->method('getParameterType')
            ->willReturn($type);

        $reflection->expects($this->once())
            ->method('getName');

        $tokens->expects($this->once())
            ->method('getParameterType');

        $reflection->expects($this->once())
            ->method('getName');

        $methodComment->expects($this->once())
            ->method('getParameterComment');

        $reflection->expects($this->once())
            ->method('getName');

        $parameters->createMethodParameters($parameterReflections, $tokens, $methodComment);
    }
}