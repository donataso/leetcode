<?php

declare(strict_types=1);

namespace Problems\n0004_MedianOfTwoSortedArrays;

/*
 * https://leetcode.com/problems/median-of-two-sorted-arrays/description/
 * Difficulty: hard
 *
 * TODO: solve it so that time complexity is O(log (m+n))
 */
final class Solution
{
    /**
     * @param int[] $nums1
     * @param int[] $nums2
     */
    public function findMedianSortedArrays(array $nums1, array $nums2): float
    {
        $totalNumbers = count($nums1) + count($nums2);
        $medianIndex = ceil($totalNumbers / 2) - 1;
        $indices = [$medianIndex => null];
        if ($totalNumbers % 2 === 0) {
            $indices[$medianIndex + 1] = null;
        }

        for ($m = 0, $n = 0, $idx = 0; $m < count($nums1) || $n < count($nums2); $idx++) {
            $num1 = $nums1[$m] ?? null;
            $num2 = $nums2[$n] ?? null;

            if (isset($num1) && !isset($num2)) {
                $value = $num1;
                $m++;
            } elseif (!isset($num1) && isset($num2)) {
                $value = $num2;
                $n++;
            } elseif ($num1 < $num2) {
                $value = $num1;
                $m++;
            } else {
                $value = $num2;
                $n++;
            }

            if (array_key_exists($idx, $indices)) {
                $indices[$idx] = $value;
            }
            if ($idx > $medianIndex) {
                break;
            }
        }

        return array_sum($indices) / count($indices);
    }
}
