<?php

use Santillana\Remainder;
use PHPUnit\Framework\TestCase;

class RemainderTest extends TestCase
{
    public function test_required_remainder()
    {
        $this->assertEquals(12339, Remainder::requiredRemainder(7, 5, 12345));
        $this->assertEquals(15, Remainder::requiredRemainder(10, 5, 15));
        $this->assertEquals(54306, Remainder::requiredRemainder(17, 8, 54321));
        $this->assertEquals(999999995, Remainder::requiredRemainder(499999993, 9, 1000000000));
        $this->assertEquals(185, Remainder::requiredRemainder(10, 5, 187));
        $this->assertEquals(999999998, Remainder::requiredRemainder(2, 0, 999999999));
    }

    public function test_require_remainder_zero()
    {
        $this->assertEquals(0, Remainder::requiredRemainder(5, 0, 4));
    }
}
