<?php

declare(strict_types=1);

namespace Problems\n1337_TheKWeakestRowsInAMatrix;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

final class SolutionTest extends Testcase
{
    /**
     * @dataProvider dataProvider
     */
    public function testSolution($expected, $params): void
    {
        Assert::assertEquals($expected, (new Solution())->kWeakestRows(...$params));
    }

    protected function dataProvider(): iterable
    {
        return [
            'case 1' => [
                'expected' => [2, 0, 3],
                'params' => [
                    [
                        [1, 1, 0, 0, 0],//2
                        [1, 1, 1, 1, 0],
                        [1, 0, 0, 0, 0],//1
                        [1, 1, 0, 0, 0],//3
                        [1, 1, 1, 1, 1]
                    ],
                    3,
                ],
            ],
            'case 2' => [
                'expected' => [0, 2],
                'params' => [
                    [
                        [1, 0, 0, 0],
                        [1, 1, 1, 1],
                        [1, 0, 0, 0],
                        [1, 0, 0, 0]
                    ],
                    2,
                ],
            ],
        ];
    }
}
