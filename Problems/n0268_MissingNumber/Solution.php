<?php

declare(strict_types=1);

namespace Problems\n0268_MissingNumber;

/*
 * https://leetcode.com/problems/missing-number/
 * Difficulty: easy
 */
final class Solution
{
    /**
     * @param int[] $nums
     */
    public function missingNumber(array $nums): int
    {
        $sequenceSum = count($nums) * (1 + count($nums)) / 2;
        $sum = 0;
        foreach ($nums as $num) {
            $sum += $num;
        }

        return $sequenceSum - $sum;
    }
}
