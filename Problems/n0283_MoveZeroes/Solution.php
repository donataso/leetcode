<?php

declare(strict_types=1);

namespace Problems\n0283_MoveZeroes;

/*
 * https://leetcode.com/problems/move-zeroes/
 * Difficulty: easy
 */
final class Solution
{
    /**
     * @param int[] $nums
     */
    public function moveZeroes(array &$nums): void
    {
        for ($lastNonZeroFoundAt = 0, $cur = 0; $cur < count($nums); $cur++) {
            if ($nums[$cur] !== 0) {
                [$nums[$lastNonZeroFoundAt], $nums[$cur]] = [$nums[$cur], $nums[$lastNonZeroFoundAt]];
                $lastNonZeroFoundAt++;
            }
        }
    }
}
