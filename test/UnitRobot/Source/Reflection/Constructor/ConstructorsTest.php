<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Reflection\Constructor;

use MemMemov\UnitRobot\Source\Reflection\Parameter\Parameters;
use MemMemov\UnitRobot\Source\Reflection\Method\MethodSignature;
use MemMemov\UnitRobot\Source\Token\MethodSignatures as MethodSignatureTokens;
use MemMemov\UnitRobot\Source\Reflection\Comment\MethodComments;
use MemMemov\UnitRobot\Source\Description\Instance\Instancies;
use PHPUnit\Framework\TestCase;

final class ConstructorsTest extends TestCase
{
    protected $methodSignatureTokens;
    protected $parameters;
    protected $methodComments;
    protected $instances;

    protected function setUp(): void
    {
        $this->methodSignatureTokens = $this->createMock(MethodSignatureTokens::class);
        $this->parameters = $this->createMock(Parameters::class);
        $this->methodComments = $this->createMock(MethodComments::class);
        $this->instances = $this->createMock(Instancies::class);
    }

}