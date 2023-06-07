<?php

declare(strict_types=1);

namespace Problems\n0004_MedianOfTwoSortedArrays;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

final class SolutionTest extends Testcase
{
    /**
     * @dataProvider dataProvider
     */
    public function testSolution(float $expected, array $params): void
    {
        Assert::assertEquals($expected, (new Solution())->findMedianSortedArrays(...$params));
    }

    protected function dataProvider(): iterable
    {
        return [
            'case 1' => [
                'expected' => 2.0,
                'params' => [
                    [1, 3],
                    [2],
                ],
            ],
            'case 2' => [
                'expected' => 2.5,
                'params' => [
                    [1, 2],
                    [3, 4],
                ],
            ],
        ];
    }
}
