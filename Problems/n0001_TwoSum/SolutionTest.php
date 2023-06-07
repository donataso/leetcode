<?php

declare(strict_types=1);

namespace Problems\n0001_TwoSum;

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Assert;

final class SolutionTest extends Testcase
{
    /**
     * @dataProvider dataProvider
     */
    public function testSolution(array $expected, array $params): void
    {
        $result = (new Solution())->twoSum(...$params);
        sort($result);

        Assert::assertEquals($expected, $result);
    }

    protected function dataProvider(): iterable
    {
        return [
            'case 1' => [
                'expected' => [0, 1],
                'params' => [
                    [2, 7, 11, 15],
                    9,
                ],
            ],
            'case 2' => [
                'expected' => [1, 2],
                'params' => [
                    [3, 2, 4],
                    6,
                ],
            ],
            'case 3' => [
                'expected' => [0, 1],
                'params' => [
                    [3, 3],
                    6,
                ],
            ],
        ];
    }
}
