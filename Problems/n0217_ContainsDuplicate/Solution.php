<?php

declare(strict_types=1);

namespace Problems\n0217_ContainsDuplicate;

/*
 * https://leetcode.com/problems/contains-duplicate/
 * Difficulty: easy
 */
final class Solution
{
    /**
     * @param int[] $nums
     */
    public function containsDuplicate(array $nums): bool
    {
        $found = [];
        foreach ($nums as $num) {
            if (array_key_exists($num, $found)) {
                return true;
            }

            $found[$num] = null;
        }

        return false;
    }
}
