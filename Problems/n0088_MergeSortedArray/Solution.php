<?php

declare(strict_types=1);

namespace Problems\n0088_MergeSortedArray;

/*
 * https://leetcode.com/problems/merge-sorted-array
 * Difficulty: easy
 */
final class Solution
{
    /**
     * @param int[] $nums1
     * @param int[] $nums2
     */
    public function merge(array &$nums1, int $m, array $nums2, int $n): void
    {
        $insertPos = count($nums1) - 1;
        $m--;
        $n--;
        while ($m >= 0 || $n >= 0) {
            if ($n < 0) {
                break;
            } elseif ($m >= 0 && $nums1[$m] > $nums2[$n]) {
                $nums1[$insertPos] = $nums1[$m];
                $m--;
            } else {
                $nums1[$insertPos] = $nums2[$n];
                $n--;
            }
            $insertPos--;
        }
    }
}
