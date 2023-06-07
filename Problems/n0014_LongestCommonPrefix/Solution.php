<?php

declare(strict_types=1);

namespace Problems\n0014_LongestCommonPrefix;

/*
 * https://leetcode.com/problems/longest-common-prefix/
 * Difficulty: easy
 */
final class Solution
{
    /**
     * @param string[] $strs
     */
    public function longestCommonPrefix(array $strs): string
    {
        if (count($strs) === 1) {
            return end($strs);
        }

        $prefix = $this->getCommonPrefix($strs[0], $strs[1]);
        for ($i = 2; $i < count($strs); $i++) {
            if (str_starts_with($strs[$i], $prefix)) {
                continue;
            } else {
                $prefix = $this->getCommonPrefix($prefix, $strs[$i]);
            }
        }

        return $prefix;

//         $prefix = '';
//         for ($i = 0; $i < 200; $i++) {
//             $char = null;
//             foreach ($strs as $str) {
//                 if ($i >= strlen($str)) {
//                     return $prefix;
//                 }
//                 if ($char === null) {
//                     $char = $str[$i];
//                 } elseif ($char !== $str[$i]) {
//                     return $prefix;
//                 }
//             }
//             $prefix .= $char;
//         }
//         return $prefix;
    }

    private function getCommonPrefix(string $s1, string $s2): string
    {
        if (strlen($s1) > strlen($s2)) {
            return $this->getCommonPrefix($s2, $s1);
        } elseif ($s1 === '') {
            return '';
        }

        $prefix = '';
        for ($i = 0; $i < strlen($s1); $i++) {
            if ($s1[$i] === $s2[$i]) {
                $prefix .= $s1[$i];
            } else {
                break;
            }
        }

        return $prefix;
    }
}
