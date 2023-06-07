<?php

declare(strict_types=1);

namespace Problems\n0026_RemoveDuplicatesFromSortedArray;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

final class SolutionTest extends Testcase
{
    /**
     * @dataProvider dataProvider
     */
    public function testSolution(array $expected, array &$nums): void
    {
        $k = (new Solution())->removeDuplicates($nums);
        Assert::assertEquals($expected[0], $k);
        Assert::assertEquals($expected[1], array_values($nums));
    }

    protected function dataProvider(): iterable
    {
        return [
            'case 1' => [
                'expected' => [2, [1, 2]],
                'nums' => [1, 1, 2],
            ],
            'case 2' => [
                'expected' => [5, [0, 1, 2, 3, 4]],
                'nums' => [0, 0, 1, 1, 1, 2, 2, 3, 3, 4],
            ],
        ];
    }
}
