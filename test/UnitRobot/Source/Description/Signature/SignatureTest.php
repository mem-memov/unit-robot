<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Description\Signature;

use MemMemov\UnitRobot\Source\Description\Type\Type;
use MemMemov\UnitRobot\UnitTest\UnitTest;
use MemMemov\UnitRobot\Source\Description\Calls;
use PHPUnit\Framework\TestCase;

final class SignatureTest extends TestCase
{
    protected $method;
    protected $parameters;
    protected $returnType;

    protected function setUp(): void
    {
        $this->method = 'some $this->method value';
        $this->parameters = $this->createMock(SignatureParameters::class);
        $this->returnType = $this->createMock(Type::class);
    }

    public function testItCanCreateUnitTests(): void
    {
        $signature = new Signature($this->method, $this->parameters, $this->returnType);

        $unitTest = $this->createMock(UnitTest::class);
        $shortClassName = 'some $shortClassName value';

        $signature->createUnitTests($unitTest, $shortClassName);
    }
}