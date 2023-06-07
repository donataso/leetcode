<?php

declare(strict_types=1);

namespace Problems\n0350_IntersectionOfTwoArraysII;

/*
 * https://leetcode.com/problems/intersection-of-two-arrays-ii/
 * Difficulty: easy
 */
final class Solution
{
    /**
     * @param int[] $nums1
     * @param int[] $nums2
     * @return int[]
     */
    public function intersect(array $nums1, array $nums2): array
    {
        // I should not do this, but I solved it a long time ago, and it is not interesting, so whatever
        sort($nums1);
        sort($nums2);

        $result = [];
        $m = 0;
        $n = 0;
        while ($m < count($nums1) && $n < count($nums2)) {
            if ($nums1[$m] < $nums2[$n]) {
                $m++;
            } elseif ($nums1[$m] > $nums2[$n]) {
                $n++;
            } else {
                $result[] = $nums1[$m];
                $m++;
                $n++;
            }
        }

        return $result;
    }
}
