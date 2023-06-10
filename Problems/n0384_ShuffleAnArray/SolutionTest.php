<?php

declare(strict_types=1);

namespace Problems\n0384_ShuffleAnArray;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

final class SolutionTest extends Testcase
{
    /**
     * This may fail sometimes as reshuffling could produce the original array.
     *
     * @dataProvider dataProvider
     */
    public function testSolution(array $input): void
    {
        $this->markTestSkipped(
            'this test is flaky, should use more samples of the same input and measure distribution',
        );

        $solution = new Solution($input);

        $shuffled = $solution->shuffle();
        Assert::assertNotSame($input, $shuffled);

        $reset = $solution->reset();
        Assert::assertSame($input, $reset);

        $shuffled = $solution->shuffle();
        Assert::assertNotSame($input, $shuffled);
    }

    protected function dataProvider(): iterable
    {
        return [
            [[1, 2, 3]],
            [[1, 2]],
        ];
    }
}
