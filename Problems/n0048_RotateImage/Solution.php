<?php

declare(strict_types=1);

namespace Problems\n0048_RotateImage;

/*
 * https://leetcode.com/problems/rotate-image/
 * Difficulty: medium
 */
final class Solution
{
    /**
     * @param int[][] $matrix
     */
    public function rotate(array &$matrix): void
    {
        $cnt = count($matrix);

        // transpose
        for ($i = 0; $i < $cnt; $i++) {
            for ($j = $i; $j < $cnt; $j++) {
                if ($i !== $j) {
                    [$matrix[$i][$j], $matrix[$j][$i]] = [$matrix[$j][$i], $matrix[$i][$j]];
                }
            }
        }

        // swap columns
        for ($i = 0; $i < intdiv($cnt, 2); $i++) {
            $i2 = $cnt - $i - 1;
            for ($j = 0; $j < $cnt; $j++) {
                [$matrix[$j][$i], $matrix[$j][$i2]] = [$matrix[$j][$i2], $matrix[$j][$i]];
            }
        }
    }
}
