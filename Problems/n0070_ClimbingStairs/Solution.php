<?php

declare(strict_types=1);

namespace Problems\n0070_ClimbingStairs;

/*
 * https://leetcode.com/problems/climbing-stairs
 * Difficulty: easy
 *
 * I understand this once I read the solution, but I could not have done this myself in a reasonable time :/
 */
final class Solution
{
    public function climbStairs(int $n): int
    {
        $memo = [];

        return $this->climb(0, $n, $memo);
    }

    private function climb(int $start, int $end, array &$memo): int
    {
        if ($start === $end) {
            return 1;
        }

        if ($start > $end) {
            return 0;
        }

        if (isset($memo[$start])) {
            return $memo[$start];
        }

        $memo[$start] = $this->climb($start + 1, $end, $memo) + $this->climb($start + 2, $end, $memo);

        return $memo[$start];
    }
}
