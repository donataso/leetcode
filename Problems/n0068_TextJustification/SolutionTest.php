<?php

declare(strict_types=1);

namespace Problems\n0068_TextJustification;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

final class SolutionTest extends Testcase
{
    /**
     * @dataProvider dataProvider
     */
    public function testSolution(array $expected, array $params): void
    {
        Assert::assertEquals($expected, (new Solution())->fullJustify(...$params));
    }

    protected function dataProvider(): iterable
    {
        return [
            'case 1' => [
                'expected' => [
                    'This    is    an',
                    'example  of text',
                    'justification.  ',
                ],
                'params' => [
                    ['This', 'is', 'an', 'example', 'of', 'text', 'justification.'],
                    16,
                ],
            ],
            'case 2' => [
                'expected' => [
                    'What   must   be',
                    'acknowledgment  ',
                    'shall be        ',
                ],
                'params' => [
                    ['What', 'must', 'be', 'acknowledgment', 'shall', 'be'],
                    16,
                ],
            ],
            'case 3' => [
                'expected' => [
                    'Science  is  what we',
                    'understand      well',
                    'enough to explain to',
                    'a  computer.  Art is',
                    'everything  else  we',
                    'do                  ',
                ],
                'params' => [
                    [
                        'Science',
                        'is',
                        'what',
                        'we',
                        'understand',
                        'well',
                        'enough',
                        'to',
                        'explain',
                        'to',
                        'a',
                        'computer.',
                        'Art',
                        'is',
                        'everything',
                        'else',
                        'we',
                        'do',
                    ],
                    20,
                ],
            ],
        ];
    }
}
