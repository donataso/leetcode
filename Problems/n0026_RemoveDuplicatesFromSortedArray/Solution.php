<?php

declare(strict_types=1);

namespace Problems\n0026_RemoveDuplicatesFromSortedArray;

/*
 * https://leetcode.com/problems/remove-duplicates-from-sorted-array/
 * Difficulty: easy
 */
final class Solution
{
    /**
     * @param int[] $nums
     */
    public function removeDuplicates(array &$nums): int
    {
        $count = 0;
        $last = null;
        foreach ($nums as $key => $value) {
            if ($value === $last) {
                unset($nums[$key]);
                continue;
            }
            $last = $value;

            $count++;
        }

        return $count;
    }
}
