<?php

declare(strict_types=1);

namespace Problems\n0384_ShuffleAnArray;

/*
 * https://leetcode.com/problems/shuffle-an-array
 * Difficulty: medium
 */
final class Solution
{
    /**
     * @param int[] $nums
     */
    public function __construct(private array $nums)
    {
    }

    /**
     * @return int[]
     */
    public function reset(): array
    {
        return $this->nums;
    }

    /**
     * @return int[]
     */
    public function shuffle(): array
    {
        $count = count($this->nums);
        if ($count <= 1) {
            return $this->nums;
        }

        $shuffled = $this->nums;
        for ($i = 0; $i < $count; $i++) {
            $rand = random_int($i, $count - 1);
            [$shuffled[$i], $shuffled[$rand]] = [$shuffled[$rand], $shuffled[$i]];
        }

        return $shuffled;
    }
}
