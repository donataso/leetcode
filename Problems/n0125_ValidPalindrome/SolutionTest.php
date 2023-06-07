<?php

declare(strict_types=1);

namespace Problems\n0125_ValidPalindrome;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

final class SolutionTest extends Testcase
{
    /**
     * @dataProvider dataProvider
     */
    public function testSolution(bool $expected, array $params): void
    {
        Assert::assertEquals($expected, (new Solution())->isPalindrome(...$params));
    }

    protected function dataProvider(): iterable
    {
        return [
            'case 1' => [
                'expected' => true,
                'params' => [
                    'A man, a plan, a canal: Panama',
                ],
            ],
            'case 2' => [
                'expected' => false,
                'params' => [
                    'race a car',
                ],
            ],
            'case 3' => [
                'expected' => true,
                'params' => [
                    ' ',
                ],
            ],
        ];
    }
}
