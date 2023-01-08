<?php

declare(strict_types=1);

namespace Problems\n1672_RichestCustomerWealth;

/*
 * https://leetcode.com/problems/richest-customer-wealth/description/
 * Difficulty: easy
 */
final class Solution
{
    /**
     * @param int[][] $accounts
     */
    public function maximumWealth(array $accounts): int
    {
        $max = 0;
        foreach ($accounts as $account) {
            $wealth = 0;
            foreach ($account as $value) {
                $wealth += $value;
            }

            $max = max($max, $wealth);
        }

        return $max;

        // cheater's solution :)
        // return max(array_map(array_sum(...), $accounts));
    }
}
