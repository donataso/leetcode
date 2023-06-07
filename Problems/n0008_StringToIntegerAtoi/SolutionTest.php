<?php

declare(strict_types=1);

namespace Problems\n0008_StringToIntegerAtoi;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

final class SolutionTest extends Testcase
{
    /**
     * @dataProvider dataProvider
     */
    public function testSolution(int $expected, array $params): void
    {
        Assert::assertEquals($expected, (new Solution())->myAtoi(...$params));
    }

    protected function dataProvider(): iterable
    {
        return [
            'case 1' => [
                'expected' => 42,
                'params' => [
                    '42',
                ],
            ],
            'case 2' => [
                'expected' => -42,
                'params' => [
                    '-42',
                ],
            ],
            'case 3' => [
                'expected' => 4193,
                'params' => [
                    '4193 with words',
                ],
            ],
        ];
    }
}
