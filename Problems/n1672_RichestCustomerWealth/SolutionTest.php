<?php

declare(strict_types=1);

namespace Problems\n1672_RichestCustomerWealth;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

final class SolutionTest extends Testcase
{
    /**
     * @dataProvider dataProvider
     */
    public function testSolution($expected, $params): void
    {
        Assert::assertEquals($expected, (new Solution())->maximumWealth(...$params));
    }

    protected function dataProvider(): iterable
    {
        return [
            'case 1' => [
                'expected' => 6,
                'params' => [
                    [[1, 2, 3], [3, 2, 1]],
                ],
            ],
            'case 2' => [
                'expected' => 10,
                'params' => [
                    [[1, 5], [7, 3], [3, 5]],
                ],
            ],
            'case 3' => [
                'expected' => 17,
                'params' => [
                    [[2, 8, 7], [7, 1, 3], [1, 9, 5]],
                ],
            ],
        ];
    }
}
