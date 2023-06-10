<?php

declare(strict_types=1);

namespace Problems\n0268_MissingNumber;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

final class SolutionTest extends Testcase
{
    /**
     * @dataProvider dataProvider
     */
    public function testSolution(int $expected, array $params): void
    {
        Assert::assertEquals($expected, (new Solution())->missingNumber(...$params));
    }

    protected function dataProvider(): iterable
    {
        return [
            'case 1' => [
                'expected' => 2,
                'params' => [
                    [3, 0, 1],
                ],
            ],
            'case 2' => [
                'expected' => 8,
                'params' => [
                    [9, 6, 4, 2, 3, 5, 7, 0, 1],
                ],
            ],
            'case 3' => [
                'expected' => 2,
                'params' => [
                    [0, 1],
                ],
            ],
        ];
    }
}
