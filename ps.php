<?php
function fun($arr){    
    $element = 0;    
    $max_count = 0;
    $arr_len = count($arr);    
    for($i=0;$i<$arr_len;$i++){        
    $count = 0 ;
    for($j=0;$j<$arr_len;$j++){
        if($arr[$i]==$arr[$j]){
            $count++;
        }
        if($max_count<$count){            
            $max_count=$count;
            $element = $arr[$i];
        }
    }
    }
return $element;
}
$arr = [8,7,7,6,6,6,5]; //print the most repeated element
echo fun($arr) . "\n";
