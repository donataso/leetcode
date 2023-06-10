<?php

declare(strict_types=1);

namespace Problems\n0191_NumberOf1Bits;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

final class SolutionTest extends Testcase
{
    /**
     * @dataProvider dataProvider
     */
    public function testSolution(int $expected, array $params): void
    {
        Assert::assertEquals($expected, (new Solution())->hammingWeight(...$params));
    }

    protected function dataProvider(): iterable
    {
        return [
            'case 1' => [
                'expected' => 1,
                'params' => [
                    0b00000000000000000000000010000000,
                ],
            ],
            'case 2' => [
                'expected' => 3,
                'params' => [
                    0b00000000000000000000000000001011,
                ],
            ],
            'case 3' => [
                'expected' => 31,
                'params' => [
                    0b11111111111111111111111111111101,
                ],
            ],
        ];
    }
}
