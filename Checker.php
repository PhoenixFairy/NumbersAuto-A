<?php
include_once 'ComputeNum.php'; 
$array = array(1,2,3,4,5);
 # $array = 1;
$num = new ComputeNum($array);
echo $num->getAverage();