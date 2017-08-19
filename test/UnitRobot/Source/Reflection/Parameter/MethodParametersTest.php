<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Reflection\Parameter;

use MemMemov\UnitRobot\UnitTest\UnitTest;
use MemMemov\UnitRobot\UnitTest\MethodParameters as UnitTestMethodParameters;
use MemMemov\UnitRobot\UnitTest\Builder\Declarations as UnitTestDeclarations;
use MemMemov\UnitRobot\UnitTest\Builder\ParameterDeclarations as UnitTestParameterDeclarations;
use MemMemov\UnitRobot\Source\Description\Instance\InstanceProperties;
use MemMemov\UnitRobot\Source\Description\Instance\InstanceParameters;
use MemMemov\UnitRobot\Source\Description\Instance\InstanceDependencies;
use MemMemov\UnitRobot\Source\Description\Instance\Instancies;
use MemMemov\UnitRobot\Source\Description\Signature\Signatures;
use MemMemov\UnitRobot\Source\Description\Signature\SignatureParameters;
use PHPUnit\Framework\TestCase;

final class MethodParametersTest extends TestCase
{
    protected $parameters;
    protected $instances;
    protected $signatures;

    protected function setUp(): void
    {
        $this->parameters = [];
        $this->instances = $this->createMock(Instancies::class);
        $this->signatures = $this->createMock(Signatures::class);
    }

}