<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Token;

use PHPUnit\Framework\TestCase;

final class ComplexTokenTest extends TestCase
{
    protected $code;
    protected $name;
    protected $string;
    protected $line;

    protected function setUp(): void
    {
        $this->code = 5;
        $this->name = 'some $this->name value';
        $this->string = 'some $this->string value';
        $this->line = 5;
    }

    public function testItCanHasVariable(): void
    {
        $complexToken = new ComplexToken($this->code, $this->name, $this->string, $this->line);

        $value = 'some $value value';

        $complexToken->hasVariable($value);
    }

    public function testItCanIsTypePart(): void
    {
        $complexToken = new ComplexToken($this->code, $this->name, $this->string, $this->line);


        $complexToken->isTypePart();
    }

    public function testItCanGetString(): void
    {
        $complexToken = new ComplexToken($this->code, $this->name, $this->string, $this->line);


        $complexToken->getString();
    }

    public function testItCanToString(): void
    {
        $complexToken = new ComplexToken($this->code, $this->name, $this->string, $this->line);


        $complexToken->toString();
    }
}