<?php

declare(strict_types=1);

namespace Problems\n0013_RomanToInteger;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

final class SolutionTest extends Testcase
{
    /**
     * @dataProvider dataProvider
     */
    public function testSolution(int $expected, array $params): void
    {
        Assert::assertEquals($expected, (new Solution())->romanToInt(...$params));
    }

    protected function dataProvider(): iterable
    {
        return [
            'II' => [
                'expected' => 2,
                'params' => ['II'],
            ],
            'IV' => [
                'expected' => 4,
                'params' => ['IV'],
            ],
            'LVIII' => [
                'expected' => 58,
                'params' => ['LVIII'],
            ],
            'MCMXCIV' => [
                'expected' => 1994,
                'params' => ['MCMXCIV'],
            ],
        ];
    }
}
