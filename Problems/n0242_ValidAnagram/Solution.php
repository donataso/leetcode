<?php

declare(strict_types=1);

namespace Problems\n0242_ValidAnagram;

/*
 * https://leetcode.com/problems/valid-anagram/
 * Difficulty: easy
 */
final class Solution
{
    public function isAnagram(string $s, string $t): bool
    {
        $counter = [];
        for ($i = 0; $i < strlen($s); $i++) {
            $counter[$s[$i]] ??= 0;
            $counter[$s[$i]]++;
        }

        for ($i = 0; $i < strlen($t); $i++) {
            if (!array_key_exists($t[$i], $counter)) {
                return false;
            }

            $counter[$t[$i]]--;

            if ($counter[$t[$i]] < 0) {
                return false;
            }
        }

        foreach ($counter as $count) {
            if ($count !== 0) {
                return false;
            }
        }

        return true;
    }
}
