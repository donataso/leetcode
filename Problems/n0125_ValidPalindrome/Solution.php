<?php

declare(strict_types=1);

namespace Problems\n0125_ValidPalindrome;

/*
 * https://leetcode.com/problems/valid-palindrome/
 * Difficulty: easy
 */
final class Solution
{
    public function isPalindrome(string $s): bool
    {
        $i = 0;
        $j = strlen($s) - 1;
        while ($i <= $j) {
            if (!ctype_alnum($s[$i])) {
                $i++;
                continue;
            } elseif (!ctype_alnum($s[$j])) {
                $j--;
                continue;
            } elseif (strcasecmp($s[$i], $s[$j]) !== 0) {
                return false;
            } else {
                $i++;
                $j--;
            }
        }

        return true;
    }
}
