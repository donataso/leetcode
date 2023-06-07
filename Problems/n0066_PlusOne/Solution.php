<?php

declare(strict_types=1);

namespace Problems\n0066_PlusOne;

/*
 * https://leetcode.com/problems/plus-one/
 * Difficulty: easy
 */
final class Solution
{
    /**
     * @param int[] $digits
     * @return int[]
     */
    public function plusOne(array $digits): array
    {
        $digits[count($digits) - 1]++;
        $carry = 0;
        for ($i = count($digits) - 1; $i >= 0; $i--) {
            $digits[$i] += $carry;
            $carry = floor($digits[$i] / 10);
            $digits[$i] %= 10;
        }

        if ($carry) {
            array_unshift($digits, $carry);
        }

        return $digits;
    }
}
