<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\UnitTest\Builder;

use MemMemov\UnitRobot\UnitTest\File\Text;
use PHPUnit\Framework\TestCase;

final class ResultCallDeclarationTest extends TestCase
{
    protected $callVariable;
    protected $method;
    protected $resultVariable;

    protected function setUp(): void
    {
        $this->callVariable = 'some $this->callVariable value';
        $this->method = 'some $this->method value';
        $this->resultVariable = 'some $this->resultVariable value';
    }

}