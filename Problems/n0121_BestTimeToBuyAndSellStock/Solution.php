<?php

declare(strict_types=1);

namespace Problems\n0121_BestTimeToBuyAndSellStock;

/*
 * https://leetcode.com/problems/best-time-to-buy-and-sell-stock
 * Difficulty: easy
 */
final class Solution
{
    /**
     * @param int[] $prices
     */
    public function maxProfit(array $prices): int
    {
        return $this->somethingBetter($prices);
//        return $this->bruteforce($prices);
    }

    /**
     * So the idea in the official solution is like this, just the other way around:
     * they start from the beginning and save the lowest price.
     */
    private function somethingBetter(array $prices): int
    {
        $maxProfit = 0;
        $maxPrice = 0;
        for ($i = count($prices) - 1; $i >= 0; $i--) {
            if ($prices[$i] > $maxPrice) {
                $maxPrice = $prices[$i];
            }

            $maxProfit = max($maxProfit, $maxPrice - $prices[$i]);
        }

        return $maxProfit;
    }

    private function bruteforce(array $prices): int
    {
        $maxProfit = 0;
        for ($dayBuy = 0; $dayBuy < count($prices) - 1; $dayBuy++) {
            for ($daySell = $dayBuy + 1; $daySell < count($prices); $daySell++) {
                $maxProfit = max($maxProfit, $prices[$daySell] - $prices[$dayBuy]);
            }
        }

        return $maxProfit;
    }
}
