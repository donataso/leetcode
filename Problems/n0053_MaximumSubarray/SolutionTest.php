<?php

declare(strict_types=1);

namespace Problems\n0053_MaximumSubarray;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

final class SolutionTest extends Testcase
{
    /**
     * @dataProvider dataProvider
     */
    public function testSolution(int $expected, array $params): void
    {
        Assert::assertEquals($expected, (new Solution())->maxSubArray(...$params));
    }

    protected function dataProvider(): iterable
    {
        return [
            'case 1' => [
                'expected' => 6,
                'params' => [
                    [-2, 1, -3, 4, -1, 2, 1, -5, 4],
                ],
            ],
            'case 2' => [
                'expected' => 1,
                'params' => [
                    [1],
                ],
            ],
            'case 3' => [
                'expected' => 23,
                'params' => [
                    [5, 4, -1, 7, 8],
                ],
            ],
        ];
    }
}
