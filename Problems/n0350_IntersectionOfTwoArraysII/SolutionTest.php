<?php

declare(strict_types=1);

namespace Problems\n0350_IntersectionOfTwoArraysII;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

final class SolutionTest extends Testcase
{
    /**
     * @dataProvider dataProvider
     */
    public function testSolution(array $expected, array $params): void
    {
        Assert::assertEquals($expected, (new Solution())->intersect(...$params));
    }

    protected function dataProvider(): iterable
    {
        return [
            'case 1' => [
                'expected' => [2, 2],
                'params' => [
                    [1, 2, 2, 1],
                    [2, 2],
                ],
            ],
            'case 2' => [
                'expected' => [4, 9],
                'params' => [
                    [4, 9, 5],
                    [9, 4, 9, 8, 4],
                ],
            ],
        ];
    }
}
