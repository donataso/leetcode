<?php

declare(strict_types=1);

namespace Problems\n0003_LongestSubstringWithoutRepeatingCharacters;

/*
 * https://leetcode.com/problems/longest-substring-without-repeating-characters/description/
 * Difficulty: medium
 */
final class Solution
{
    public function lengthOfLongestSubstring(string $s): int
    {
        $max = 0;
        $word = [];
        for ($i = 0; $i < strlen($s); $i++) {
            $char = $s[$i];
            while (isset($word[$char])) {
                array_shift($word);
            }
            $word[$char] = true;

            $max = max($max, count($word));
        }

        return $max;
    }
}
