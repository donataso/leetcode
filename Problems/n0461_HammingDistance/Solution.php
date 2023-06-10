<?php

declare(strict_types=1);

namespace Problems\n0461_HammingDistance;

/*
 * https://leetcode.com/problems/hamming-distance
 * Difficulty: easy
 */
final class Solution
{
    public function hammingDistance(int $x, int $y): int
    {
        $result = 0;

        $num = $x ^ $y;
        while ($num !== 0) {
            // my initial solution
//            $result += $num & 1;
//            $num >>= 1;

            // Even better: Brian Kernighan's bit counting algorithm
            // idea: When we do AND bit operation between number and number-1,
            // the rightmost bit of one in the original number would be cleared.
            $result++;
            $num = $num & ($num - 1);
        }

        return $result;
    }
}
