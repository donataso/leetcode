<?php

declare(strict_types=1);

namespace Problems\nXXXX_WallsAndGates;

/*
 * This is a premium task, I cannot access it, just got a screenshot.
 * Difficulty: ?
 *
 * You are given an m*n grid initialized with three possible values:
 * * -1: a gate or obstacle
 * * 0: gate
 * * INF: empty room, numeric value is 2^31 - 1
 * Fill each empty room with distance to the nearest gate. If it's impossible to reach any gate, fill with INF.
 */
final class Solution
{
    public const INF = 2**31 - 1;
    public const GATE = 0;
    public const OBSTACLE = -1;

    private const NEIGHBORS = [
        [-1, 0], // top
        [0, 1], // right
        [1, 0], // bottom
        [0, -1], // left
    ];

    /**
     * @param int[][] $rooms
     */
    public function solve(array &$rooms): void
    {
        $queue = [];

        // find and enqueue all gates
        foreach ($rooms as $m => $row) {
            foreach ($row as $n => $room) {
                if ($room === self::GATE) {
                    $queue[] = [$m, $n, 0];
                }
            }
        }

        while (!empty($queue)) {
            [$m, $n, $distance] = array_shift($queue);
            if ($rooms[$m][$n] === self::INF) {
                $rooms[$m][$n] = $distance;
            }

            // enqueue neighbors
            array_push($queue, ...$this->getEmptyNeighbors($m, $n, $distance + 1, $rooms));
        }
    }

    private function getEmptyNeighbors(int $m, int $n, int $distance, array &$rooms): array
    {
        $result = [];
        foreach (self::NEIGHBORS as $direction) {
            $mm = $m + $direction[0];
            $nn = $n + $direction[1];

            if (isset($rooms[$mm][$nn]) && $rooms[$mm][$nn] === self::INF) {
                $result[] = [$mm, $nn, $distance];
            }
        }

        return $result;
    }
}
