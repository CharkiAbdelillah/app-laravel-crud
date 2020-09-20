<?php

namespace Tests\Unit;
use App\Nombre;
use PHPUnit\Framework\TestCase;

class SaisirNombreTest extends TestCase
{
    /** @test */
    public function is_nambre()
    {
        $this->assertTrue(Nombre::saisirNombre(777));
    }
}
