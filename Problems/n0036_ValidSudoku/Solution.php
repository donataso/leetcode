<?php

declare(strict_types=1);

namespace Problems\n0036_ValidSudoku;

/*
 * https://leetcode.com/problems/valid-sudoku/
 * Difficulty: medium
 */
final class Solution
{
    /**
     * @param string[][] $board
     */
    public function isValidSudoku(array $board): bool
    {
//         $rows = [];
//         $cols = [];
//         $cells = [];
//         for ($i = 0; $i < 9; $i++) {
//             for ($j = 0; $j < 9; $j++) {
//                 $num = $board[$i][$j];
//                 if ($num === '.') {
//                     continue;
//                 }
//
//                 $cellNo = (int) ($i / 3) * 3 + (int) ($j / 3);
//                 if (isset($rows[$i][$num]) || isset($cols[$j][$num]) || isset($cells[$cellNo][$num])) {
//                     return false;
//                 }
//
//                 $rows[$i][$num] = $cols[$j][$num] = $cells[$cellNo][$num] = 0;
//             }
//         }

        for ($i = 0; $i < 9; $i++) {
            $row = [];
            $col = [];
            $cell = [];

            for ($j = 0; $j < 9; $j++) {
                // row
                $rowValue = $board[$i][$j];
                if ($rowValue !== '.') {
                    if (isset($row[$rowValue])) {
                        return false;
                    } else {
                        $row[$rowValue] = 0;
                    }
                }

                // col
                $colValue = $board[$j][$i];
                if ($colValue !== '.') {
                    if (isset($col[$colValue])) {
                        return false;
                    } else {
                        $col[$colValue] = 0;
                    }
                }

                // cell
                $x = $i % 3 * 3 + $j % 3;
                $y = floor($i / 3) * 3 + floor($j / 3);
                $cellValue = $board[$x][$y];
                if ($cellValue !== '.') {
                    if (isset($cell[$cellValue])) {
                        return false;
                    } else {
                        $cell[$cellValue] = 0;
                    }
                }
            }
        }

        return true;
    }
}
