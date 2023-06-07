<?php

declare(strict_types=1);

namespace Leetcode;

use InvalidArgumentException;

class ListNode
{
    public function __construct(public int $val = 0, public ?ListNode $next = null)
    {
    }

    public function __toString(): string
    {
        return json_encode($this->toArray());
    }

    /**
     * @return int[]
     */
    public function toArray(): array
    {
        $result = [];
        $head = $this;
        while ($head) {
            $result[] = $head->val;
            $head = $head->next;
        }

        return $result;
    }

    public function last(): self
    {
        $last = $this;
        while ($last->next) {
            $last = $last->next;
        }

        return $last;
    }

    public function nth(int $pos): ?self
    {
        $head = $this;
        $idx = 0;
        while ($head && $pos > $idx++) {
            $head = $head->next;
        }

        return $head;
    }

    /**
     * @param int[] $input
     */
    public static function fromArray(array $input): ?self
    {
        if (empty($input)) {
            return null;
        }

        $value = array_shift($input);
        if (!is_int($value)) {
            throw new InvalidArgumentException('ListNode accepts only integers');
        }

        return new self($value, static::fromArray($input));
    }
}
