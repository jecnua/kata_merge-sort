<?php
/**
 * Created by PhpStorm.
 * User: jecnua
 * Date: 01/07/14
 * Time: 18:58
 */

namespace algorithm;


class MergeSort {

    public function merge(array $arrayToSort){
        if (count($arrayToSort) <= 1) {
            return $arrayToSort;
        }
        $container = array_chunk($arrayToSort, 1);
        while (count($container) > 1){
            $sorted = array(); //reset each cycle
            for ($i = 0; $i < count($container); $i+=2){
                if (isset($container[$i+1])) {
                    $sorted[] = $this->merge_and_sort_two_arrays_already_sorted($container[$i],$container[$i+1]);
                }
                else {
                    $sorted[] = $container[$i];
                }
            }
            $container = $sorted;
        }
        return array_pop($container);
    }

    private function merge_and_sort_two_arrays_already_sorted(array $first, array $second){
        if (empty($second)){
            return $first;
        }
        if (empty($first)){
            return $second;
        }
        $temporaryContainer = array();
        while (!empty($first) && !empty($second)){
            if ($first[0] <= $second[0]){
                $temporaryContainer[] = $first[0];
                array_shift($first);
            }
            else {
                $temporaryContainer[] = $second[0];
                array_shift($second);
            }
        }
        if (empty($first)){
            return array_merge($temporaryContainer, $second);
        }
        return array_merge($temporaryContainer, $first);
    }

} 