<?php
function arrMin($arr){
    $min = $arr[0];
    for($i = 0; $i<count($arr);$i++){
        if ($arr[$i] < $min){
            $min =$arr[$i];
        }
    }
    echo "gia tri nho nhat: ".$min;
}
$arr = [1,3,5,6,9,5,0,77,2,7,5,5,6,2,-2];
arrMin($arr);
