<?php

declare(strict_types=1);

namespace Problems\n0155_MinStack;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

final class SolutionTest extends Testcase
{
    public function testSolution(): void
    {
        $stack = new Solution();
        $stack->push(-2);
        $stack->push(0);
        $stack->push(-3);
        Assert::assertSame(-3, $stack->getMin());
        $stack->pop();
        $stack->top();
        Assert::assertSame(-2, $stack->getMin());
    }
}
