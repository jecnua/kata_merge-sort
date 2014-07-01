<?php
/**
 * Created by PhpStorm.
 * User: jecnua
 * Date: 01/07/14
 * Time: 18:58
 */

namespace algorithm;


class MergeSort {

    public function merge_sort(array $arrayToSort){
        if (count($arrayToSort) <= 1) {
            return $arrayToSort;
        }
        //Split
        $allElementInArrayOfOne = array_chunk($arrayToSort, 1);
        $numElement = count($allElementInArrayOfOne);
        for ($i = 0; $i < count($allElementInArrayOfOne); $i=$i+2){
            $sorted = $this->merge_two_arrays_already_sorted($allElementInArrayOfOne[$i],$allElementInArrayOfOne[$i+1]);
            print_r($sorted);
        }
        //Merge
        $sorted = $this->merge_two_arrays_already_sorted(array(3,9),array(1,6));
        return $sorted;
    }

    public function merge_two_arrays_already_sorted($first, $second){
        $result = array();
        while (count ($first) != 0 && count ($second) != 0){
            if ($first[0] <= $second[0]){
                $result[] = $first[0];
                array_shift($first);
            }
            else {
                $result[] = $second[0];
                array_shift($second);
            }
        }
        if (count ($first) == 0){
            return array_merge($result, $second);
        }
        return array_merge($result, $first);
    }

} 