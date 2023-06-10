<?php

declare(strict_types=1);

namespace Problems\n0190_ReverseBits;

/*
 * https://leetcode.com/problems/reverse-bits
 * Difficulty: easy
 */
final class Solution
{
    public function reverseBits(int $n): int
    {
        $result = 0;
        for ($i = 0; $i < 32; $i++) {
            if ($n & (1 << $i)) {
                $result |= 1 << (31 - $i);
            }
        }

        return $result;
    }
}
