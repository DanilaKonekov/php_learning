<?php

namespace App\Algoritms\Grokaem_and_leetcode\Chapter_1;

class BinarySearch
{
    public function binarySearch(array $a, int $b, $low = 0)
    {
        $high = count($a) -1;

        while($low <= $high){
            $mid = floor(($low + $high) / 2);
            $guess = $a[$mid];
            if ($guess == $b){
                return $mid;
            }
            if($guess > $b){
                $high = $mid - 1;
            } else {
                $low = $mid + 1;
            }
        }
        return false;
    }
}
