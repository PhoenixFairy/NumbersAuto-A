<?php
use Exceptions\DataNotArrayException;
/**
 * 
 * 
 * @author Axoford12
 * @see 847072154
 *
 */
include 'Exceptions/DataNotArrayException.php';

class ComputeNum
{
    private $nums;
    
    
    public function __construct($array){
        if(!(is_array($array))){
            throw new NotArrayException('DataNotArray', 0);
        } else {
            sort($array);
            $this->nums = $array;
        }
    } 
    public function getSum(){
        $sum = 0;
        $num = $this->nums;
        $value = null;
        foreach ($num as $value) {
            $sum = $sum+$value;
        }
        return $sum;
    }
    public function getAverage(){
        $sum = $this->getSum();
        $result = 0;
        $num = $this->nums;
        $result = $sum / count($num);
        return $result;
        
    }
    public function getMedian(){
        $array = $this->nums;
        $result = 0;
        $len = count($array);
        if(($len % 2) == 0){
            $result = (($array[($len / 2 - 1)]) + ($array[$len / 2])) / 2;
       
        }else{
            $result = $array[($len - 1) / 2];
        }
    
        return $result;
    }
}

?>