<?php

declare(strict_types=1);

namespace Problems\n0189_RotateArray;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

final class SolutionTest extends Testcase
{
    /**
     * @dataProvider dataProvider
     */
    public function testSolution(array $expected, array $nums, int $k): void
    {
        (new Solution())->rotate($nums, $k);
        Assert::assertEquals($expected, $nums);
    }

    protected function dataProvider(): iterable
    {
        return [
            'case 1' => [
                'expected' => [5, 6, 7, 1, 2, 3, 4],
                'nums' => [1, 2, 3, 4, 5, 6, 7],
                'k' => 3,
            ],
            'case 2' => [
                'expected' => [3, 99, -1, -100],
                'nums' => [-1, -100, 3, 99],
                'k' => 2,
            ],
        ];
    }
}
