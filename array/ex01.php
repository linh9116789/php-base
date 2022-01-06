<?php
/**
 * Kiểu dữ liệu đơn: String, Boolean, Null, Number
 */

 $carArr = ['oto',
            'honda',
            'kia'
            ];//Khai báo mảng
//  echo '<pre>';
//  print_r($carArr);
//  echo '</pre>';
 $customerArr = [
     'php',
     'name' =>'linh',
     10     =>'Html',
     'post'=>'technical',
     'Css'
 ];
//  echo '<pre>';
//  print_r($customerArr);
//  echo '</pre>';

 //Thêm phần tử vào mảng
 /**
 Cách 1: Thêm khi khai báo
$customerArr = ['item1', 'item2'];
Cách 2: Thêm sau khi khai báo
*/ 


$customerArr = [];//Khai báo rỗng

//Thêm phần tử
$customerArr[] = 'php';
$customerArr['name'] = 'css';
$customerArr[] = 'html';
$customerArr['ten'] = 'lap trinh';

//Sửa giá trị phần tử của mảng
// $customerArr['name'] = 'edit lap trinh ';
// $customerArr[11] = 'javascript';

//Xóa phần tử của mảng
// unset($customerArr[11]); // Xóa 1 phần tử với key
// unset($customerArr); //Xóa toàn bộ phần tử trong mảng và biến mảng không tồn tại

//Đọc mảng
echo '<pre>';
print_r($customerArr);
echo '</pre>';

//1. Đọc mảng tuần tự (index tăng dần đều từ 0)
for ($index = 0; $index<count($customerArr); $index++){
    echo $customerArr[$index].'<br/>';
}

//2. Đọc mảng bất kỳ
foreach ($customerArr as $item){
    echo $item.'<br/>';
}

foreach ($customerArr as $key => $item){
    echo $key.'=>'.$item.'<br/>';
}