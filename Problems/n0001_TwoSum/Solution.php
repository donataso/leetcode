<?php

declare(strict_types=1);

namespace Problems\n0001_TwoSum;

/*
 * https://leetcode.com/problems/two-sum/description/
 * Difficulty: easy
 */
final class Solution
{
    /**
     * @param int[] $nums
     * @return int[]
     */
    public function twoSum(array $nums, int $target): array
    {
        $temp = [];
        foreach ($nums as $key => $value) {
            $temp[$value] ??= $key;

            $complement = $target - $value;
            if (isset($temp[$complement]) && $temp[$complement] !== $key) {
                return [$key, $temp[$complement]];
            }
        }

        return [];
    }
}
