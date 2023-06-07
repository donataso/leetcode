<?php

declare(strict_types=1);

namespace Problems\n0108_ConvertSortedArrayToBinarySearchTree;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

final class SolutionTest extends Testcase
{
    /**
     * @dataProvider dataProvider
     */
    public function testSolution(array $expected, array $params): void
    {
        $result = array_merge(...(new Solution())->sortedArrayToBST(...$params)->toArray());
        if (end($result) === null) {
            // strip trailing null
            array_pop($result);
        }

        Assert::assertEquals($expected, $result);
    }

    protected function dataProvider(): iterable
    {
        return [
            'case 1' => [
                'expected' => [0, -3, 9, -10, null, 5],
                'params' => [
                    [-10, -3, 0, 5, 9],
                ],
            ],
            'case 2' => [
                'expected' => [3, 1, 5, 0, 2, 4],
                'params' => [
                    [0, 1, 2, 3, 4, 5],
                ],
            ],
        ];
    }
}
