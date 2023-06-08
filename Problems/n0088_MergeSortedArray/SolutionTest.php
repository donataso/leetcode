<?php

declare(strict_types=1);

namespace Problems\n0088_MergeSortedArray;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

final class SolutionTest extends Testcase
{
    /**
     * @dataProvider dataProvider
     */
    public function testSolution(array $expected, array $params): void
    {
        $nums1 = $params['nums1'];
        array_shift($params);

        (new Solution())->merge($nums1, ...$params);
        Assert::assertEquals($expected, $nums1);
    }

    protected function dataProvider(): iterable
    {
        return [
            'case 1' => [
                'expected' => [1, 2, 2, 3, 5, 6],
                'params' => [
                    'nums1' => [1, 2, 3, 0, 0, 0],
                    'm' => 3,
                    'nums2' => [2, 5, 6],
                    'n' => 3,
                ],
            ],
            'case 2' => [
                'expected' => [1],
                'params' => [
                    'nums1' => [1],
                    'm' => 1,
                    'nums2' => [],
                    'n' => 0,
                ],
            ],
            'case 3' => [
                'expected' => [1],
                'params' => [
                    'nums1' => [0],
                    'm' => 0,
                    'nums2' => [1],
                    'n' => 1,
                ],
            ],
        ];
    }
}
