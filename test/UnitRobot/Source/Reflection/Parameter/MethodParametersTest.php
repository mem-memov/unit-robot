<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Reflection\Parameter;

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

    public function testItCanDescribeProperties(): void
    {
        $methodParameters = new MethodParameters($this->parameters, $this->instances, $this->signatures);

        $instanceDependencies = $this->createMock(InstanceDependencies::class);

        $methodParameters->describeProperties($instanceDependencies);
    }

    public function testItCanDescribeParameters(): void
    {
        $methodParameters = new MethodParameters($this->parameters, $this->instances, $this->signatures);

        $instanceDependencies = $this->createMock(InstanceDependencies::class);

        $methodParameters->describeParameters($instanceDependencies);
    }
}