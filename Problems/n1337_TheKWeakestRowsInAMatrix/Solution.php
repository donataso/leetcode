<?php

declare(strict_types=1);

namespace Problems\n1337_TheKWeakestRowsInAMatrix;

/*
 * https://leetcode.com/problems/the-k-weakest-rows-in-a-matrix/description/
 * Difficulty: easy
 */
final class Solution
{
    /**
     * @param int[][] $mat
     * @return int[]
     */
    public function kWeakestRows(array $mat, int $k): array
    {
        $strengths = array_fill(0, 100, []);
        foreach ($mat as $key => $row) {
            $rowSum = 0;
            foreach ($row as $value) {
                $rowSum += $value;
            }

            $strengths[$rowSum][] = $key;
        }

        $result = [];
        foreach ($strengths as $keys) {
            while (count($keys) > 0) {
                $result[] = array_shift($keys);
                if (count($result) === $k) {
                    break 2;
                }
            }
        }

        return $result;

        // easy with some native functions:
//        $strengths = array_map(array_sum(...), $mat);
//        asort($strengths);
//        return array_slice(array_keys($strengths), 0, $k);
    }
}
