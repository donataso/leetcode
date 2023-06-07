<?php

declare(strict_types=1);

namespace Problems\n0344_ReverseString;

/*
 * https://leetcode.com/problems/reverse-string/
 * Difficulty: easy
 */
final class Solution
{
    public function reverseString(array &$s): void
    {
        $len = count($s);
        for ($i = 0; $i < floor($len / 2); $i++) {
            [$s[$i], $s[$len - $i - 1]] = [$s[$len - $i - 1], $s[$i]];
        }
    }
}
