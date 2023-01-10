<?php

declare(strict_types=1);

namespace Problems\n0412_FizzBuzz;

/*
 * https://leetcode.com/problems/fizz-buzz/description/
 * Difficulty: easy
 */
final class Solution
{
    /**
     * @return string[]
     */
    public function fizzBuzz(int $n): array
    {
        $result = [];
        for ($i = 1; $i <= $n; $i++) {
            $result[] = $this->getFizzOrBuzz($i);
        }

        return $result;
    }

    private function getFizzOrBuzz(int $n): string
    {
        if ($n % 15 === 0) {
            return 'FizzBuzz';
        } elseif ($n % 3 === 0) {
            return 'Fizz';
        } elseif ($n % 5 === 0) {
            return 'Buzz';
        } else {
            return (string) $n;
        }
    }
}
