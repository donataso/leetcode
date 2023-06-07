<?php

declare(strict_types=1);

namespace Problems\n0007_ReverseInteger;

/*
 * https://leetcode.com/problems/reverse-integer/
 * Difficulty: medium
 */
final class Solution
{
    public function reverse(int $x): int
    {
        if ($x === 0) {
            return 0;
        }

        $sign = $x < 0 ? -1 : 1;
        $x *= $sign;
        $result = 0;
        while ($x > 0) {
            $result = $result * 10 + $x % 10;
            $x = floor($x / 10);
        }

        $result *= $sign;

        if ($result < -2**31 || $result > (2**31 - 1)) {
            return 0;
        }

        return $result;
    }
}
