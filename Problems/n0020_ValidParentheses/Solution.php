<?php

declare(strict_types=1);

namespace Problems\n0020_ValidParentheses;

/*
 * https://leetcode.com/problems/valid-parentheses
 * Difficulty: easy
 */
final class Solution
{
    public function isValid(string $s): bool
    {
        $open = ['(' => ')', '[' => ']', '{' => '}'];
        $close = array_flip($open);

        $stack = [];
        foreach (str_split($s) as $c) {
            if (isset($open[$c])) { // opening bracket
                $stack[] = $c;
                continue;
            }

            if (end($stack) === $close[$c]) { // proper closing
                array_pop($stack);
            } else { // unmatched closing
                return false;
            }
        }

        return empty($stack);
    }
}
