<?php

declare(strict_types=1);

namespace Problems\n0007_ReverseInteger;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

final class SolutionTest extends Testcase
{
    /**
     * @dataProvider dataProvider
     */
    public function testSolution(int $expected, array $params): void
    {
        Assert::assertEquals($expected, (new Solution())->reverse(...$params));
    }

    protected function dataProvider(): iterable
    {
        return [
            'case 1' => [
                'expected' => 321,
                'params' => [
                    123,
                ],
            ],
            'case 2' => [
                'expected' => -321,
                'params' => [
                    -123,
                ],
            ],
            'case 3' => [
                'expected' => 21,
                'params' => [
                    120,
                ],
            ],
        ];
    }
}
