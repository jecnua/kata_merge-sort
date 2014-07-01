<?php
/**
 * Created by PhpStorm.
 * User: jecnua
 * Date: 01/07/14
 * Time: 19:04
 */

include_once 'MergeSort.php';

function tryMe(\algorithm\MergeSort $alg,$data){
    $result = $alg->merge($data);
    print_r($result);
}

$alg = new \algorithm\MergeSort();
tryMe($alg, [1,5,4,7,9,4]); //Even
tryMe($alg, [6]); //One element
tryMe($alg, [1,5,4,7,3,9,4]); //Odd
tryMe($alg, array()); //Empty
tryMe($alg, [6,5,3,1,8,7,2,4]);