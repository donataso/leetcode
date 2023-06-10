<?php

declare(strict_types=1);

namespace Problems\n0155_MinStack;

/*
 * https://leetcode.com/problems/min-stack
 * Difficulty: medium
 */

final class Solution
{
    private array $stack = [];
    private array $min = [];

    public function push(int $val): void
    {
        $this->stack[] = $val;

        $min = end($this->min);
        $this->min[] = empty($this->min) || $val < $min ? $val : $min;
    }

    public function pop(): void
    {
        array_pop($this->stack);
        array_pop($this->min);
    }

    public function top(): int
    {
        return end($this->stack);
    }

    public function getMin(): int
    {
        return end($this->min);
    }
}
