<?php
/**
 * Created by PhpStorm.
 * User: jecnua
 * Date: 01/07/14
 * Time: 19:04
 */

include_once 'MergeSort.php';

$alg = new \algorithm\MergeSort();
$result = $alg->merge_sort(array());
print_r($result);