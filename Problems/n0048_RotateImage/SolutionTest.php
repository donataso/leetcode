<?php

declare(strict_types=1);

namespace Problems\n0048_RotateImage;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

final class SolutionTest extends Testcase
{
    /**
     * @dataProvider dataProvider
     */
    public function testSolution(array $expected, array $params): void
    {
        (new Solution())->rotate($params);
        Assert::assertEquals($expected, $params);
    }

    protected function dataProvider(): iterable
    {
        return [
            'case 1' => [
                'expected' => [[7, 4, 1], [8, 5, 2], [9, 6, 3]],
                'params' => [[1, 2, 3], [4, 5, 6], [7, 8, 9]],
            ],
            'case 2' => [
                'expected' => [[15, 13, 2, 5], [14, 3, 4, 1], [12, 6, 8, 9], [16, 7, 10, 11]],
                'params' => [[5, 1, 9, 11], [2, 4, 8, 10], [13, 3, 6, 7], [15, 14, 12, 16]],
            ],
        ];
    }
}
