<?php

declare(strict_types=1);

namespace Problems\n0286_WallsAndGates;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

final class SolutionTest extends Testcase
{
    /**
     * @dataProvider dataProvider
     */
    public function testSolution($expected, $params): void
    {
        (new Solution())->solve($params);
        Assert::assertEquals($expected, $params);
    }

    protected function dataProvider(): iterable
    {
        return [
            'case 1' => [
                'expected' => [
                    [3, Solution::OBSTACLE, Solution::GATE, 1],
                    [2, 2, 1, Solution::OBSTACLE],
                    [1, Solution::OBSTACLE, 2, Solution::OBSTACLE],
                    [Solution::GATE, Solution::OBSTACLE, 3, 4],
                ],
                'params' => [
                    [Solution::INF, Solution::OBSTACLE, Solution::GATE, Solution::INF],
                    [Solution::INF, Solution::INF, Solution::INF, Solution::OBSTACLE],
                    [Solution::INF, Solution::OBSTACLE, Solution::INF, Solution::OBSTACLE],
                    [Solution::GATE, Solution::OBSTACLE, Solution::INF, Solution::INF],
                ],
            ],
        ];
    }
}
