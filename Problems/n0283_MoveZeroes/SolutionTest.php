<?php

declare(strict_types=1);

namespace Problems\n0283_MoveZeroes;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

final class SolutionTest extends Testcase
{
    /**
     * @dataProvider dataProvider
     */
    public function testSolution(array $expected, array $params): void
    {
        (new Solution())->moveZeroes($params);
        Assert::assertEquals($expected, $params);
    }

    protected function dataProvider(): iterable
    {
        return [
            'case 1' => [
                'expected' => [1, 3, 12, 0, 0],
                'params' => [0, 1, 0, 3, 12],
            ],
            'case 2' => [
                'expected' => [0],
                'params' => [0],
            ],
        ];
    }
}
