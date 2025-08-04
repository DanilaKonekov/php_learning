<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Algoritms\Grokaem_and_leetcode\Chapter_1\BinarySearch;

class BinaryGrokaemTest extends TestCase 
{
    public static function addData()
    {
        return [
            [[], 0, false],
            [[], 1, false],
            [[1, 3, 5, 7, 9], -1, false],
            [[1, 3, 5, 7, 9], 7, 3],
        ];
    }

    /**
     * @dataProvider addData
     */
    public function testBinarySearch($arr, $actual, $expected)
    {
        $obj = new BinarySearch();
        $result = $obj->binarySearch($arr, $actual);
        $this->assertEquals($expected, $result);
    }
}