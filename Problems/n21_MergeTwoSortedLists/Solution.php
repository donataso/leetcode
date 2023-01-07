<?php

declare(strict_types=1);

namespace Problems\n21_MergeTwoSortedLists;

use ListNode;

//include dirname(__FILE__) . '/../../vendor/autoload.php';

// php -dxdebug.mode=debug -dxdebug.client_host=127.0.0.1 -dxdebug.client_port=9003 -dxdebug.start_with_request=yes 21_MergeTwoSortedLists/Solution.php

class Solution
{
    public function mergeTwoLists(?ListNode $list1, ?ListNode $list2): ?ListNode
    {
        $result = new ListNode();
        $head = $result;
        while ($list1 && $list2) {
            if ($list1->val < $list2->val) {
                $head->next = $list1;
                $list1 = $list1->next;
            } else {
                $head->next = $list2;
                $list2 = $list2->next;
            }

            $head = $head->next;
        }

        if (!$list1) {
            $head->next = $list2;
        } elseif (!$list2) {
            $head->next = $list1;
        }

        return $result->next;
    }
}

//$list1 = new ListNode(1, new ListNode(2, new ListNode(4)));
//$list2 = new ListNode(2, new ListNode(3, new ListNode(4)));
$list1 = new ListNode(1);
$list2 = new ListNode(2);
$head = (new Solution())->mergeTwoLists($list1, $list2);

echo $head . PHP_EOL;
