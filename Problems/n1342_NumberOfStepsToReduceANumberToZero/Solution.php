<?php

declare(strict_types=1);

namespace Problems\n1342_NumberOfStepsToReduceANumberToZero;

/*
 * https://leetcode.com/problems/number-of-steps-to-reduce-a-number-to-zero/description/
 * Difficulty: easy
 */
final class Solution
{
    public function numberOfSteps(int $num): int
    {
        $steps = 0;
        while ($num > 0) {
            $num = $num % 2 === 0 ? $num / 2 : $num - 1;
            $steps++;
        }

        return $steps;
    }
}
