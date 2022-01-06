<?php
//Hàm isset()
/*
 * Kiểm tra biến có tồn tại hay không
 * Không kiểm tra về dữ liệu của biến
 * Không kiểm tra được trường hợp null
 * */

// $number = null;

// $check = isset($number);
// var_dump($check);
// $number = 1;
// if (isset($number) && $number){
//     echo $number.'<br/>';
// }

//Hàm Empty()
/**
 * - Chỉ trả về kiểu dữ liệu boolean
 * - Trả về true nếu:
 * + Không tồn tại => !isset($variale)
 * Hoặc
 * + Rỗng, =0, '0', trống, null, array rỗng, object rỗng, false
 * 
 * Ứng dựng:
 * + Kiểm tra biến tồn tại và có dữ liệu 
 */
$str = array();
//Kiểm tra biến number tồn tại và có dữ liệu
if (!empty($str)){
    var_dump($str);
}else{
    echo 'Không hợp lệ';
}