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
        # Get Sum value
        $sum = 0;
        $num = $this->nums;
        $value = null;
        foreach ($num as $value) {
            $sum = $sum+$value;
        }
        return $sum;
    }
    public function getAverage(){
        # Get average
        $sum = $this->getSum();
        $result = 0;
        $num = $this->nums;
        $result = $sum / count($num);
        return $result;
        
    }
    // TODO GetMedian
    public function getMedian(){
        $array = $this->nums;
        $result = 0;
        $len = count($array);
        if(($len % 2) == 0){
            $result = (($array[($len / 2 - 1)]) + ($array[$len / 2])) / 2;
        # Example: {1,2,3,4}
        }else{
        # Example: {1,2,3,4,5}
            $result = $array[($len - 1) / 2];
        }
        
    
        return $result;
    }
    public function getVariance(){
        # No suggestions.
        # Example : {1,2,3,4,5}
        $array = $this->nums;
        $result = 0;
        $average = $this->getAverage();
        $len = count($array);
        // Compute Result
        for($i = 0;$i < $len;$i++){
            $result = ($result + ($array[$i]-$average)*($array[$i]-$average));
        }
        
        return $result/$len;
        # Return result.
    }
}

?>