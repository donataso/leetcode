<?php

declare(strict_types=1);

namespace Problems\n0412_FizzBuzz;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

final class SolutionTest extends Testcase
{
    /**
     * @dataProvider dataProvider
     */
    public function testSolution($expected, $params): void
    {
        Assert::assertEquals($expected, (new Solution())->fizzBuzz(...$params));
    }

    protected function dataProvider(): iterable
    {
        return [
            'case 1' => [
                'expected' => ['1', '2', 'Fizz'],
                'params' => [3],
            ],
            'case 2' => [
                'expected' => ['1', '2', 'Fizz', '4', 'Buzz'],
                'params' => [5],
            ],
            'case 3' => [
                'expected' => [
                    '1',
                    '2',
                    'Fizz',
                    '4',
                    'Buzz',
                    'Fizz',
                    '7',
                    '8',
                    'Fizz',
                    'Buzz',
                    '11',
                    'Fizz',
                    '13',
                    '14',
                    'FizzBuzz'
                ],
                'params' => [15],
            ],
        ];
    }
}
