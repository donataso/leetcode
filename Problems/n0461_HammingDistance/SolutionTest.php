<?php

declare(strict_types=1);

namespace Problems\n0461_HammingDistance;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

final class SolutionTest extends Testcase
{
    /**
     * @dataProvider dataProvider
     */
    public function testSolution(int $expected, array $params): void
    {
        Assert::assertEquals($expected, (new Solution())->hammingDistance(...$params));
    }

    protected function dataProvider(): iterable
    {
        return [
            'case 1' => [
                'expected' => 2,
                'params' => [
                    1,
                    4,
                ],
            ],
            'case 2' => [
                'expected' => 1,
                'params' => [
                    1,
                    3,
                ],
            ],
        ];
    }
}
