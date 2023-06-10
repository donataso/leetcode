<?php

declare(strict_types=1);

namespace Problems\n0191_NumberOf1Bits;

/*
 * https://leetcode.com/problems/number-of-1-bits
 * Difficulty: easy
 */
final class Solution
{
    public function hammingWeight(int $n): int
    {
        $count = 0;
        while ($n !== 0) {
            $count += $n & 1;
            $n >>= 1;
        }

        return $count;
    }
}
