<?php

namespace Tests\Unit;
use App\Math;
use PHPUnit\Framework\TestCase;

class MathTest extends TestCase{
    public function testFibonacci() {
      $ar=Math::fibonacci(10);
      $this->assertEquals(100,$ar);
    }
}