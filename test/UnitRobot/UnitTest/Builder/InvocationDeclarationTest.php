<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\UnitTest\Builder;

use MemMemov\UnitRobot\UnitTest\File\Text;
use PHPUnit\Framework\TestCase;

final class InvocationDeclarationTest extends TestCase
{
    protected $instance;
    protected $method;
    protected $parameters;

    protected function setUp(): void
    {
        $this->instance = 'some $this->instance value';
        $this->method = 'some $this->method value';
        $this->parameters = 'some $this->parameters value';
    }

    public function testItCanAppend(): void
    {
        $invocationDeclaration = new InvocationDeclaration($this->instance, $this->method, $this->parameters);

        $text = $this->createMock(Text::class);

        $invocationDeclaration->append($text);
    }
}