<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Description\Signature;

use MemMemov\UnitRobot\Source\Description\Type\Type;
use PHPUnit\Framework\TestCase;

final class SignaturesTest extends TestCase
{
    public function testItCanCreateSignature(): void
    {
        $signatures = new Signatures();

        $method = 'some $method value';
        $parameters = $this->createMock(SignatureParameters::class);
        $returnType = $this->createMock(Type::class);

        $signatures->createSignature($method, $parameters, $returnType);
    }

    public function testItCanCreateSignatureParameters(): void
    {
        $signatures = new Signatures();

        $signatures->createSignatureParameters();
    }
}