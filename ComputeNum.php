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
    private $average;
    private $sum;
    private $count;
    
    
    public function __construct($array){
        if(!(is_array($array))){
            throw new NotArrayException('DataNotArray', 0);
        } else {
            sort($array);
            $this->nums = $array;
            $this->sum = $this->getSum();
            $this->average = $this->getAverage();
            $this->count = count($array);
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
    
    
}

?>