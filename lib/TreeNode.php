<?php

declare(strict_types=1);

namespace Leetcode;

use InvalidArgumentException;
use SplStack;

class TreeNode
{
    public function __construct(public int $val = 0, public ?TreeNode $left = null, public ?TreeNode $right = null)
    {
    }

//    public function __toString(): string
//    {
//        return json_encode($this->toArray());
//    }
//
    /**
     * @return array<?int>
     */
    public function toArray(): array
    {
        $result = [];
        $levelValues = [];
        $previousLevel = 0;
        $queue = [[$this, 0]];
        while (!empty($queue)) {
            /** @var ?TreeNode $node */
            [$node, $level] = array_shift($queue);

            if ($previousLevel !== $level) {
                $previousLevel = $level;
                $result[] = $levelValues;
                $levelValues = [];
            }

            $levelValues[] = $node?->val;

            if ($node === null) {
                continue;
            }

            array_push($queue, [$node->left, $level + 1], [$node->right, $level + 1]);
        }

        return $result;
    }

    /**
     * @param int[] $input
     */
    public static function fromArray(array $input, int $idx = 0): ?self
    {
        $root = null;
        if ($idx < count($input) && $input[$idx] !== null) {
            if (!is_int($input[$idx])) {
                throw new InvalidArgumentException('TreeNode accepts only integers and null');
            }

            $root = new self($input[$idx] ?? 0);

            $root->left = static::fromArray($input, 2 * $idx + 1);
            $root->right = static::fromArray($input, 2 * $idx + 2);
        }

        return $root;
    }
}
