<?php
$arr = [30, 6, 3, 4, 20, 6, 7];

if (!empty($arr)){
    $max = $arr[0];
    for($i = 0;$i<count($arr);$i++){
        if ($arr[$i] > $max){
            $max = $arr[$i];
        }
    }
    echo $max.'<br/>';
}

//tim min tương tự