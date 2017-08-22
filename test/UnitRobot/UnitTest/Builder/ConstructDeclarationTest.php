<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\UnitTest\Builder;

use MemMemov\UnitRobot\UnitTest\File\Text;
use PHPUnit\Framework\TestCase;

final class ConstructDeclarationTest extends TestCase
{
    protected $className;

    protected function setUp(): void
    {
        $this->className = 'some $this->className value';
    }

    public function testItCanSetParameters(): void
    {
        $constructDeclaration = new ConstructDeclaration($this->className);

        $parameters = 'some $parameters value';

        $constructDeclaration->setParameters($parameters);
    }
}