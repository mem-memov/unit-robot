<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Reflection\Method\Call\Type;

use MemMemov\UnitRobot\Source\Reflection\Method\Call\Variable\Variable;
use MemMemov\UnitRobot\UnitTest\Builder\Declarations as UnitTestDeclarations;
use MemMemov\UnitRobot\UnitTest\Builder\CallDeclarations as UnitTestCallDeclarations;
use PHPUnit\Framework\TestCase;

final class ReturnCallTest extends TestCase
{
    protected $callVariable;
    protected $method;

    protected function setUp(): void
    {
        $this->callVariable = $this->createMock(Variable::class);
        $this->method = 'some $this->method value';
    }

}