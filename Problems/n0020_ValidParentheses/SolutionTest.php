<?php

declare(strict_types=1);

namespace Problems\n0020_ValidParentheses;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

final class SolutionTest extends Testcase
{
    /**
     * @dataProvider dataProvider
     */
    public function testSolution(bool $expected, array $params): void
    {
        Assert::assertEquals($expected, (new Solution())->isValid(...$params));
    }

    protected function dataProvider(): iterable
    {
        return [
            'case 1' => [
                'expected' => true,
                'params' => [
                    '()',
                ],
            ],
            'case 2' => [
                'expected' => true,
                'params' => [
                    '()[]{}',
                ],
            ],
            'case 3' => [
                'expected' => false,
                'params' => [
                    '(]',
                ],
            ],
            'case 4' => [
                'expected' => false,
                'params' => [
                    '[(])',
                ],
            ],
        ];
    }
}
