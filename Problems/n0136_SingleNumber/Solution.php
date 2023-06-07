<?php

declare(strict_types=1);

namespace Problems\n0136_SingleNumber;

/*
 * https://leetcode.com/problems/single-number/
 * Difficulty: easy
 */
final class Solution
{
    /**
     * @param int[] $nums
     */
    public function singleNumber(array $nums): int
    {
//         $found = [];
//         foreach ($nums as $key => $num) {
//             if (array_key_exists($num, $found)) {
//                 unset($found[$num]);
//             } else {
//                 $found[$num] = null;
//             }

//             unset($nums[$key]);
//         }

//         return array_key_first($found);

        $result = 0;
        foreach ($nums as $num) {
            $result ^= $num;
        }

        return $result;
    }
}
