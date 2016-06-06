<?php
/**
 * @author Axoford12
 * @version 1.0.1
 */
include_once 'ComputeNum.php'; 
$array = array(1,2,3,4,5);
$num = new ComputeNum($array);
 # echo $num->getAverage();
 # echo $num->getMedian();
 # Time : 2016/6/6 
 # Success.
 # echo $num->getVariance();
 # Failed: Result->3.
 # Time : 2016/6/6.
 # Success: Result->2.
 # Time : 2016/6/6 14:57