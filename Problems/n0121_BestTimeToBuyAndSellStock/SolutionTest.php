<?php

declare(strict_types=1);

namespace Problems\n0121_BestTimeToBuyAndSellStock;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

final class SolutionTest extends Testcase
{
    /**
     * @dataProvider dataProvider
     */
    public function testSolution(int $expected, array $params): void
    {
        Assert::assertEquals($expected, (new Solution())->maxProfit(...$params));
    }

    protected function dataProvider(): iterable
    {
        return [
            'case 1' => [
                'expected' => 5,
                'params' => [
                    [7, 1, 5, 3, 6, 4],
                ],
            ],
            'case 2' => [
                'expected' => 4,
                'params' => [
                    [1, 2, 3, 4, 5],
                ],
            ],
            'case 3' => [
                'expected' => 0,
                'params' => [
                    [7, 6, 4, 3, 1],
                ],
            ],
        ];
    }
}
