<?php

declare(strict_types=1);

namespace Problems\n0013_RomanToInteger;

/*
 * https://leetcode.com/problems/roman-to-integer/description/
 * Difficulty: easy
 */
final class Solution
{
    private const MAP = [
        'I' => 1,
        'IV' => 4,
        'V' => 5,
        'IX' => 9,
        'X' => 10,
        'XL' => 40,
        'L' => 50,
        'XC' => 90,
        'C' => 100,
        'CD' => 400,
        'D' => 500,
        'CM' => 900,
        'M' => 1000,
    ];

    public function romanToInt(string $s): int
    {
        $s = strtoupper($s);
        $number = 0;
        for ($i = 0; $i < strlen($s); $i++) {
            $two = substr($s, $i, 2);
            if (isset(self::MAP[$two])) {
                $number += self::MAP[$two];
                $i++;
                continue;
            }

            $one = substr($s, $i, 1);
            if (isset(self::MAP[$one])) {
                $number += self::MAP[$one];
            }
        }

        return $number;
    }
}
