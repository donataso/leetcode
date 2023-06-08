<?php

declare(strict_types=1);

namespace Problems\n0278_FirstBadVersion;

/*
 * https://leetcode.com/problems/first-bad-version
 * Difficulty: easy
 */
final class Solution
{
    private int $firstBadVersion = 0;

    public function firstBadVersion(int $n): int
    {
        if ($n === 1) {
            return $n;
        }

        $min = 1;
        $max = $n;
        while ($min < $max) {
            // this is an interesting point from the official solution:
            // intdiv($max + $min, 2) may overflow int in some languages
            $mid = $min + intdiv($max - $min, 2);
            if ($this->isBadVersion($mid)) {
                $max = $mid;
            } else {
                $min = $mid + 1;
            }
        }

        return $min;
    }

    public function isBadVersion(int $version): bool
    {
        return $version >= $this->firstBadVersion;
    }

    public function setFirstBadVersion(int $firstBadVersion): void
    {
        $this->firstBadVersion = $firstBadVersion;
    }
}
