<?php
include_once 'ComputeNum.php';
include_once 'Exceptions/NoParamException.php';


if(!(isset($_POST['Nums']) || (!(is_array($_POST['Nums']))))){
    throw (new NoParamException('No Param', 1));
    exit();
}


$nums = $_POST['Nums'];
$num = new ComputeNum($nums);
$result = $num->results_array;
foreach($result as $key => $value){
    echo $key.' = '.$value;
    echo '<br />';
}
?>