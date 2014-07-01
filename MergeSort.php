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
        $allElementInArrayOfOne = array_chunk($arrayToSort, 1);
        while (count($allElementInArrayOfOne) > 1){
            $sorted = array();
            if (count($allElementInArrayOfOne) % 2 == 0 ){
                for ($i = 0; $i < count($allElementInArrayOfOne); $i=$i+2){
                    $sorted[] = $this->merge_two_arrays_already_sorted($allElementInArrayOfOne[$i],$allElementInArrayOfOne[$i+1]);
                }
            }
            else {
                for ($i = 0; $i < count($allElementInArrayOfOne); $i=$i+2){
                    if (($i + 1) >= count($allElementInArrayOfOne)) {
                        $sorted[] = $this->merge_two_arrays_already_sorted($allElementInArrayOfOne[$i],array());
                    }
                    else{
                        $sorted[] = $this->merge_two_arrays_already_sorted($allElementInArrayOfOne[$i],$allElementInArrayOfOne[$i+1]);
                    }
                }
            }
            $allElementInArrayOfOne = $sorted;
        }
        return $allElementInArrayOfOne[0];
    }

    public function merge_two_arrays_already_sorted(array $first, array $second){
        if (empty($second)){
            return $first;
        }
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