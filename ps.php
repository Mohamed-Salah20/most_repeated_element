<?php
/*
for($i=1;$i<=10;$i++){
    echo $i . "\n";
}

#print odd no. less than 100

for($i=1;$i<100;$i+=2){
    echo $i;
}
echo "\n";


for($i=1;$i<=10;$i++){
    $x="7 * " . $i . " = " . 7*$i;
    echo $x . "\n"; 
}
*/
// $x = 0;
// for($i=11;$i<=30;$i++){
//     global $x;
//     $x += $i;
// }
// echo $x;

// $x = 0;
// for($i=11;$i<=30;$i++){
//     global $x;
//     if($i%2 == 0){
//         $x += $i; 
//     }
//     continue;
// }
// echo $x;



// $arr = [2,3,-1,5,7,9,10,15,95];
// // print_r ($arr);
// $arr_len = count($arr);
// echo $arr_len;

// function sum($arr){
// global $arr_len;
// $x=0;
// for($i=0;$i<$arr_len;$i++){
//     $x += $arr[$i];
// }
// return $x;
// }
// echo sum($arr);
// $max = 0;
// $second_max = 0;
// for($i=0;$i<$arr_len;$i++){
//     if($max < $arr[$i]){
//         $max = $arr[$i];
//     }
// }
// for($i=0;$i<$arr_len;$i++){
//     if($arr[$i]==$max){
//         continue;
//     }else if($second_max < $arr[$i]){
//         $second_max = $arr[$i];
//     }
// }
// echo $second_max;

// $sorted = sort($arr);
// print_r($arr);




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