<?php

declare(strict_types=1);

namespace Problems\n0053_MaximumSubarray;

/*
 * https://leetcode.com/problems/maximum-subarray
 * Difficulty: medium
 */
final class Solution
{
    /**
     * @param int[] $nums
     */
    public function maxSubArray(array $nums): int
    {
        return $this->somethingBetter($nums);
//        return $this->bruteforce($nums);
    }

    private function somethingBetter(array $nums): int
    {
        $maxSubarray = PHP_INT_MIN;
        $subarray = 0;
        for ($i = 0; $i < count($nums); $i++) {
            $subarray += $nums[$i];
            if ($subarray < 0) {
                $subarray = 0;
                continue;
            }
            $maxSubarray = max($maxSubarray, $subarray);
        }

        return $maxSubarray;
    }

    /**
     * Essentially the same as I wrote above, just looks nicer.
     */
    private function kadanesAlgorithm(array $nums): int
    {
        $maxSubarray = 0;
        $subarray = 0;
        for ($i = 0; $i < count($nums); $i++) {
            $subarray = max(0, $subarray + $nums[$i]);
            $maxSubarray = max($maxSubarray, $subarray);
        }

        return $maxSubarray;
    }

    private function bruteforce(array $nums): int
    {
        $maxSubarray = PHP_INT_MIN;
        for ($i = 0; $i < count($nums); $i++) {
            $subarray = 0;
            for ($j = $i; $j < count($nums); $j++) {
                $subarray += $nums[$j];
                $maxSubarray = max($maxSubarray, $subarray);
            }
        }

        return $maxSubarray;
    }
}
