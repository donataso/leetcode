<?php

declare(strict_types=1);

namespace Problems\n0189_RotateArray;

/*
 * https://leetcode.com/problems/rotate-array/
 * Difficulty: medium
 */
final class Solution
{
    /**
     * @param int[] $nums
     */
    public function rotate(array &$nums, int $k): void
    {
        $length = count($nums);
        $k = $k % $length;
        if ($k === 0) {
            return;
        }
//        $nums = array_merge(
//            array_slice($nums, count($nums) - $k, $k),
//            array_slice($nums, 0, count($nums) - $k),
//        );

        $this->reverse($nums, 0, $length - 1);
        $this->reverse($nums, 0, $k - 1);
        $this->reverse($nums, $k, $length - 1);
    }

    private function reverse(array &$nums, int $start, int $end): void
    {
        while ($start < $end) {
            [$nums[$start], $nums[$end]] = [$nums[$end], $nums[$start]];
            $start++;
            $end--;
        }
    }
}
