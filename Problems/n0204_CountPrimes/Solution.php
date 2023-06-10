<?php

declare(strict_types=1);

namespace Problems\n0204_CountPrimes;

/*
 * https://leetcode.com/problems/count-primes
 * Difficulty: medium
 */
final class Solution
{
    public function countPrimes(int $n): int
    {
        if ($n <= 2) {
            return 0;
        }

        return $this->eratosthenesSieveBetter($n);
//        return $this->eratosthenesSieveMine($n);
//        return $this->almostBruteforce($n);
    }

    private function eratosthenesSieveMine(int $n): int
    {
        $numbers = array_fill(0, $n, 0);
        $maxP = sqrt($n);
        $p = 2;
        while ($p) {
            // unset multiplies of $p
            for ($i = 2; $i <= intdiv($n, $p); $i++) {
                unset($numbers[$p * $i]);
            }

            // find a new $p
            for ($i = $p + 1; $i <= $maxP; $i++) {
                if (isset($numbers[$i])) {
                    $p = $i;
                    continue 2;
                }
            }

            // new $p was not found, this must be the end
            break;
        }

        return count($numbers) - 2; // exclude 0 and 1 at the start
    }

    private function eratosthenesSieveBetter(int $n): int
    {
        $numbers = array_fill(0, $n, 0);

        for ($p = 2; $p < sqrt($n) + 1; $p++) {
            if (!isset($numbers[$p])) {
                continue;
            }

            for ($num = $p ** 2; $num < $n; $num += $p) {
                unset($numbers[$num]);
            }
        }

        return count($numbers) - 2; // exclude 0 and 1 at the start
    }

    private function almostBruteforce(int $n): int
    {
        $primes = [2 => 2];
        for ($i = 3; $i < $n; $i += 2) {
            foreach ($primes as $prime) {
                if ($i % $prime === 0) {
                    continue 2;
                }
            }

            $primes[$i] = $i;
        }

        return count($primes);
    }
}
