<?php

declare(strict_types=1);

namespace Problems\n0122_BestTimeToBuyAndSellStockII;

/*
 * https://leetcode.com/problems/best-time-to-buy-and-sell-stock-ii/
 * Difficulty: medium
 */
final class Solution
{
    /**
     * @param int[] $prices
     */
    public function maxProfit(array $prices): int
    {
        $profit = 0;
        for ($i = 0; $i < count($prices) - 1; $i++) {
            if ($prices[$i] < $prices[$i + 1]) {
                $profit += $prices[$i + 1] - $prices[$i];
            }
        }

        return $profit;
    }
}
