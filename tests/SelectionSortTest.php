<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Algoritms\Grokaem_and_leetcode\Chapter2\Sort;

class SelectionSortTest extends TestCase
{
    public static function addDataProvider()
    {
        return [
            [[], []],
            [[5, 2, 7, 8], [2, 5, 7, 8]],
            [[7, 7, 7, 1], [1, 7, 7, 7]],
        ];
    }

    /**
     * @dataProvider addDataProvider
     */
    public function testSelectionSort($arr1, $expected)
    {
        $obj = new Sort();

        $result = $obj->selectionSort($arr1);
        $this->assertEquals($expected, $result);
    }

    public function testFindSmallestIndex()
    {
        $obj = new Sort();

        $arr1 = [];        
        $this->assertEquals([], $obj->findSmallest($arr1));

        $arr2 = [5, 2, 7, 8];        
        $this->assertEquals(1, $obj->findSmallest($arr2));

        $arr3 = [7, 7, 7, 1];        
        $this->assertEquals(3, $obj->findSmallest($arr3));
    }
}