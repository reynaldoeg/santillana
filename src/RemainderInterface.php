<?php

namespace Santillana;

interface RemainderInterface
{
    /**
     * @param int $x  2 <= x <= 10^9
     * @param int $y  0 <= y < x
     * @param int $n  y <= n <= >10^9

     * @return int
     */
    public static function requiredRemainder(int $x, int $y, int $n): int;
}
