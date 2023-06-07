<?php

declare(strict_types=1);

namespace Problems\n0136_SingleNumber;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

final class SolutionTest extends Testcase
{
    /**
     * @dataProvider dataProvider
     */
    public function testSolution(int $expected, array $params): void
    {
        Assert::assertEquals($expected, (new Solution())->singleNumber(...$params));
    }

    protected function dataProvider(): iterable
    {
        return [
            'case 1' => [
                'expected' => 1,
                'params' => [
                    [2, 2, 1],
                ],
            ],
            'case 2' => [
                'expected' => 4,
                'params' => [
                    [4, 1, 2, 1, 2],
                ],
            ],
            'case 3' => [
                'expected' => 1,
                'params' => [
                    [1],
                ],
            ],
        ];
    }
}
