<?php

declare(strict_types=1);

namespace Problems\n0326_PowerOfThree;

/*
 * https://leetcode.com/problems/power-of-three
 * Difficulty: easy
 */
final class Solution
{
    public function isPowerOfThree(int $n): bool
    {
        if ($n < 1) {
            return false;
        }

        // the following is correct, but does not work on leetcode env
        // $x = (int) log($n, 3);
        // so fixing float precision errors like this:
        $x = (int) round(log($n, 3));

        return $n === 3 ** $x;
    }
}
