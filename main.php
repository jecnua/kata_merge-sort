<?php
/**
 * Created by PhpStorm.
 * User: jecnua
 * Date: 01/07/14
 * Time: 19:04
 */

include_once 'MergeSort.php';

function fast(\algorithm\MergeSort $alg,$data){
    $result = $alg->merge_sort($data);
    //print_r($result);
}

$alg = new \algorithm\MergeSort();
fast($alg, [1,5,4,7,9,4,2]);
fast($alg, [6]);
