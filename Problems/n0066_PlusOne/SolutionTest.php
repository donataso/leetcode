<?php

declare(strict_types=1);

namespace Problems\n0066_PlusOne;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

final class SolutionTest extends Testcase
{
    /**
     * @dataProvider dataProvider
     */
    public function testSolution(array $expected, array $params): void
    {
        Assert::assertEquals($expected, (new Solution())->plusOne(...$params));
    }

    protected function dataProvider(): iterable
    {
        return [
            'case 1' => [
                'expected' => [1, 2, 4],
                'params' => [
                    [1, 2, 3],
                ],
            ],
            'case 2' => [
                'expected' => [4, 3, 2, 2],
                'params' => [
                    [4, 3, 2, 1],
                ],
            ],
            'case 3' => [
                'expected' => [1, 0],
                'params' => [
                    [9],
                ],
            ],
        ];
    }
}
