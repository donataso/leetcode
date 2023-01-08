<?php

declare(strict_types=1);

namespace Problems\n0068_TextJustification;

/*
 * https://leetcode.com/problems/text-justification/description/
 * Difficulty: hard
 */
final class Solution
{
    /**
     * @param string[] $words
     * @return string[]
     */
    public function fullJustify(array $words, int $maxWidth): array
    {
        $result = [];
        $row = [];
        $rowLength = 0;
        foreach ($words as $word) {
            if ($rowLength + strlen($word) + count($row) > $maxWidth) {
                $result[] = $this->getSpacedRow($row, $maxWidth, last: false);

                $row = [];
                $rowLength = 0;
            }

            $row[] = $word;
            $rowLength += strlen($word);
        }

        if (!empty($row)) {
            $result[] = $this->getSpacedRow($row, $maxWidth, last: true);
        }

        return $result;
    }

    private function getSpacedRow(array $row, int $maxWidth, bool $last): string
    {
        if ($last) {
            $row = [implode(' ', $row)];
        }

        $wordsCount = count($row);
        if ($wordsCount === 1) {
            return str_pad($row[0], $maxWidth);
        }

        $spacesNeeded = $maxWidth - strlen(implode('', $row));
        $spacedRow = '';
        while ($row) {
            $wordInRow = array_shift($row);

            $spacing = (int) ceil($spacesNeeded / max(1, count($row)));
            $spacesNeeded -= $spacing;

            $spacedRow .= $wordInRow . str_repeat(' ', $spacing);
        }

        return $spacedRow;
    }
}
