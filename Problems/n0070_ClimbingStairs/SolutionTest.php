<?php

declare(strict_types=1);

namespace Problems\n0070_ClimbingStairs;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

final class SolutionTest extends Testcase
{
    /**
     * @dataProvider dataProvider
     */
    public function testSolution(int $expected, array $params): void
    {
        Assert::assertEquals($expected, (new Solution())->climbStairs(...$params));
    }

    protected function dataProvider(): iterable
    {
        return [
            'case 1' => [
                'expected' => 2,
                'params' => [
                    2,
                ],
            ],
            'case 2' => [
                'expected' => 3,
                'params' => [
                    3,
                ],
            ],
            'case 3' => [
                'expected' => 5,
                'params' => [
                    4,
                ],
            ],
        ];
    }
}
