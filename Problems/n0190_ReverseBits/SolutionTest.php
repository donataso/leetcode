<?php

declare(strict_types=1);

namespace Problems\n0190_ReverseBits;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

final class SolutionTest extends Testcase
{
    /**
     * @dataProvider dataProvider
     */
    public function testSolution(int $expected, array $params): void
    {
        Assert::assertEquals($expected, (new Solution())->reverseBits(...$params));
    }

    protected function dataProvider(): iterable
    {
        return [
            'case 1' => [
                'expected' => 0b00111001011110000010100101000000,
                'params' => [
                    0b00000010100101000001111010011100,
                ],
            ],
            'case 2' => [
                'expected' => 0b10111111111111111111111111111111,
                'params' => [
                    0b11111111111111111111111111111101,
                ],
            ],
        ];
    }
}
