<?php

declare(strict_types=1);

namespace Problems\n0198_HouseRobber;

/*
 * https://leetcode.com/problems/house-robber
 * Difficulty: medium
 */
final class Solution
{
    /**
     * @param int[] $nums
     */
    public function rob(array $nums): int
    {
        if (empty($nums)) {
            return 0;
        }

        return $this->robOfficial($nums);

//        $memo = [];
//        return $this->robRange($nums, 0, $memo);
    }

    private function robRange(array &$nums, int $start, array &$memo): int
    {
        if ($start > count($nums) || !isset($nums[$start])) {
            return 0;
        }

        if ($start === count($nums)) {
            return $nums[$start];
        }

        $memo[$start] ??= max(
            $this->robRange($nums, $start + 1, $memo),
            $nums[$start] + $this->robRange($nums, $start + 2, $memo),
        );

        return $memo[$start];
    }

    private function robOfficial(array $nums): int
    {
        $count = count($nums);
        $maxRobbedAmount = array_fill(0, $count, 0);

        $maxRobbedAmount[$count] = 0;
        $maxRobbedAmount[$count - 1] = $nums[$count - 1];

        for ($i = $count - 2; $i >= 0; $i--) {
            $maxRobbedAmount[$i] = max(
                $maxRobbedAmount[$i + 1],
                $maxRobbedAmount[$i + 2] + $nums[$i],
            );
        }

        return $maxRobbedAmount[0];
    }
}
