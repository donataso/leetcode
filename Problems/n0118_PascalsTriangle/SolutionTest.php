<?php

declare(strict_types=1);

namespace Problems\n0118_PascalsTriangle;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

final class SolutionTest extends Testcase
{
    /**
     * @dataProvider dataProvider
     */
    public function testSolution(array $expected, array $params): void
    {
        Assert::assertEquals($expected, (new Solution())->generate(...$params));
    }

    protected function dataProvider(): iterable
    {
        return [
            'case 1' => [
                'expected' => [[1], [1, 1], [1, 2, 1], [1, 3, 3, 1], [1, 4, 6, 4, 1]],
                'params' => [
                    5,
                ],
            ],
            'case 2' => [
                'expected' => [[1]],
                'params' => [
                    1,
                ],
            ],
            'case 3' => [
                'expected' => [],
                'params' => [
                    0,
                ],
            ],
        ];
    }
}
