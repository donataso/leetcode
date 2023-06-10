<?php

declare(strict_types=1);

namespace Problems\n0118_PascalsTriangle;

/*
 * https://leetcode.com/problems/pascals-triangle/
 * Difficulty: easy
 */
final class Solution
{
    /**
     * @return int[][]
     */
    public function generate(int $numRows): array
    {
        if ($numRows <= 0) {
            return [];
        }

        $result = [[1]];
        $prevRow = $result[0];
        for ($i = 1; $i < $numRows; $i++) {
            $row = [1];
            for ($j = 1; $j < count($prevRow); $j++) {
                $row[] = $prevRow[$j - 1] + $prevRow[$j];
            }
            $row[] = 1;

            $result[] = $row;
            $prevRow = $row;
        }

        return $result;
    }
}
