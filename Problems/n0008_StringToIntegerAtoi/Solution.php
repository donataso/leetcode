<?php

declare(strict_types=1);

namespace Problems\n0008_StringToIntegerAtoi;

/*
 * https://leetcode.com/problems/string-to-integer-atoi/
 * Difficulty: medium
 */
final class Solution
{
    public function myAtoi(string $s): int
    {
        if ($s === '') {
            return 0;
        }

        $i = 0;
        while ($s[$i] === ' ') {
            $i++;
        }

        if ($i >= strlen($s)) {
            return 0;
        }

        $sign = 1;
        if ($s[$i] === '-' || $s[$i] === '+') {
            $sign = $s[$i] === '+' ? 1 : -1;
            $i++;
        }

        $result = 0;
        $lowerBound = -2 ** 31;
        $upperBound = 2 ** 31 - 1;

        for (; $i < strlen($s); $i++) {
            if (!ctype_digit($s[$i])) {
                break;
            }

            $result = $result * 10 + (int) $s[$i];
        }

        $result *= $sign;

        if ($result < $lowerBound) {
            return $lowerBound;
        }
        if ($result > $upperBound) {
            return $upperBound;
        }

        return $result;
    }
}
