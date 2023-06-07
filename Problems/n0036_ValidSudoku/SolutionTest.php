<?php

declare(strict_types=1);

namespace Problems\n0036_ValidSudoku;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

final class SolutionTest extends Testcase
{
    /**
     * @dataProvider dataProvider
     */
    public function testSolution(bool $expected, array $params): void
    {
        Assert::assertEquals($expected, (new Solution())->isValidSudoku(...$params));
    }

    protected function dataProvider(): iterable
    {
        return [
            'case 1' => [
                'expected' => true,
                'params' => [
                    [
                        ['5', '3', '.', '.', '7', '.', '.', '.', '.'],
                        ['6', '.', '.', '1', '9', '5', '.', '.', '.'],
                        ['.', '9', '8', '.', '.', '.', '.', '6', '.'],
                        ['8', '.', '.', '.', '6', '.', '.', '.', '3'],
                        ['4', '.', '.', '8', '.', '3', '.', '.', '1'],
                        ['7', '.', '.', '.', '2', '.', '.', '.', '6'],
                        ['.', '6', '.', '.', '.', '.', '2', '8', '.'],
                        ['.', '.', '.', '4', '1', '9', '.', '.', '5'],
                        ['.', '.', '.', '.', '8', '.', '.', '7', '9'],
                    ],
                ],
            ],
            'case 2' => [
                'expected' => false,
                'params' => [
                    [
                        ['8', '3', '.', '.', '7', '.', '.', '.', '.'],
                        ['6', '.', '.', '1', '9', '5', '.', '.', '.'],
                        ['.', '9', '8', '.', '.', '.', '.', '6', '.'],
                        ['8', '.', '.', '.', '6', '.', '.', '.', '3'],
                        ['4', '.', '.', '8', '.', '3', '.', '.', '1'],
                        ['7', '.', '.', '.', '2', '.', '.', '.', '6'],
                        ['.', '6', '.', '.', '.', '.', '2', '8', '.'],
                        ['.', '.', '.', '4', '1', '9', '.', '.', '5'],
                        ['.', '.', '.', '.', '8', '.', '.', '7', '9'],
                    ],
                ],
            ],
        ];
    }
}
