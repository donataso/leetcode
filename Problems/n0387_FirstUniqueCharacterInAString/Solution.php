<?php

declare(strict_types=1);

namespace Problems\n0387_FirstUniqueCharacterInAString;

/*
 * https://leetcode.com/problems/first-unique-character-in-a-string
 * Difficulty: easy
 */
final class Solution
{
    public function firstUniqChar(string $s): int
    {
        $seen = [];
        for ($i = 0; $i < strlen($s); $i++) {
            $char = $s[$i];
            if (isset($seen[$char])) {
                $seen[$char] = -1;
            } else {
                $seen[$char] = $i;
            }
        }

        foreach ($seen as $idx) {
            if ($idx !== -1) {
                return $idx;
            }
        }

        return -1;
    }
}
