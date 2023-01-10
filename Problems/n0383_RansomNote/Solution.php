<?php

declare(strict_types=1);

namespace Problems\n0383_RansomNote;

/*
 * https://leetcode.com/problems/ransom-note/description/
 * Difficulty: easy
 */
final class Solution
{
    public function canConstruct(string $ransomNote, string $magazine): bool
    {
        $dictionary = [];
        for ($i = 0; $i < strlen($magazine); $i++) {
            $char = $magazine[$i];

            $dictionary[$char] ??= 0;
            $dictionary[$char]++;
        }

        for ($i = 0; $i < strlen($ransomNote); $i++) {
            $char = $ransomNote[$i];

            if (isset($dictionary[$char]) && $dictionary[$char] > 0) {
                $dictionary[$char]--;
            } else {
                return false;
            }
        }

        return true;
    }
}
