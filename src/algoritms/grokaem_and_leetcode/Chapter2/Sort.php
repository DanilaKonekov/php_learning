<?php

namespace App\Algoritms\Grokaem_and_leetcode\Chapter2;

class Sort
{
    public function findSmallest(array $arr){
        if (count($arr) == 0){
            return [];
        }
        $smallestNumber = $arr[0];
        $smallestIndex = 0;
        
        foreach ($arr as $key => $value) {
            if ($value < $smallestNumber) {
                $smallestNumber = $value;
                $smallestIndex = $key;
            }
        }
        return $smallestIndex;
    }

    public function selectionSort(array $arr){
        $sortArr = [];
        foreach ($arr as $key) {
            $smallestIndex = $this->findSmallest($arr);
            $sortArr[] = $arr[$smallestIndex];

            array_splice($arr, $smallestIndex,1);
        }
        return $sortArr;
    }
}