<?php

declare(strict_types=1);

namespace Problems\n0344_ReverseString;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

final class SolutionTest extends Testcase
{
    /**
     * @dataProvider dataProvider
     */
    public function testSolution(array $expected, array $params): void
    {
        (new Solution())->reverseString($params);
        Assert::assertEquals($expected, $params);
    }

    protected function dataProvider(): iterable
    {
        return [
            'case 1' => [
                'expected' => ['o', 'l', 'l', 'e', 'h'],
                'params' => ['h', 'e', 'l', 'l', 'o'],
            ],
            'case 2' => [
                'expected' => ['h', 'a', 'n', 'n', 'a', 'H'],
                'params' => ['H', 'a', 'n', 'n', 'a', 'h'],
            ],
        ];
    }
}
