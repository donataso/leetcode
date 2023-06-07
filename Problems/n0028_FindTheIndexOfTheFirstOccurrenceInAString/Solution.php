<?php

declare(strict_types=1);

namespace Problems\n0028_FindTheIndexOfTheFirstOccurrenceInAString;

/*
 * https://leetcode.com/problems/find-the-index-of-the-first-occurrence-in-a-string/
 * Difficulty: easy
 */
final class Solution
{
    public function strStr(string $haystack, string $needle): int
    {
        if ($needle === $haystack) {
            return 0;
        } elseif (strlen($needle) > strlen($haystack)) {
            return -1;
        }

        $idxNeedle = 0;
        for ($idxHaystack = 0; $idxHaystack < strlen($haystack); $idxHaystack++) {
            if ($haystack[$idxHaystack] === $needle[$idxNeedle]) {
                if ($idxNeedle === strlen($needle) - 1) {
                    return $idxHaystack - $idxNeedle;
                }

                $idxNeedle++;
            } elseif ($idxNeedle > 0) {
                // go back
                $idxHaystack -= $idxNeedle;
                $idxNeedle = 0;
            }
        }

        return -1;
    }
}
