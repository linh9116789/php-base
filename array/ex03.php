<?php
/**
 * Mảng đa chiều
 * Duyệt (đọc) mảng đa chiều
 */

 //Khai báo mảng đa chiều
$customeArr= [
    [
        'name' => 'linh',
        'email' => 'linhtran.dev@gmail.com',
        'address' => 'TP Vung Tau'
    ],
    [
        'name' => 'linh1',
        'email' => 'linhtran1.dev@gmail.com',
        'address' => 'TP Vung Tau'
    ],
    'status' =>'success'
];

//Khai báo mảng đa chiều không có dữ liệu
$customeArr = [];

//Nhập dữ liệu vào mảng đa chiều
$customeArr['special'] = [
    'name' => 'linh',
    'email' => 'linhtran.dev@gmail.com',
    'address' => 'TP Vung Tau'
];
$customeArr[] = 30;
$customeArr['status'] = 'success';
$customeArr[]['name'] = 'Xuan truong';
$customeArr[3]['email'] = 'dev.@gmail.com';
$customeArr[3]['phone'] = '0123456789';
$customeArr[3]['address'] = 'Tp vung tau';
$customeArr['special']['postion'] = [
    'technical',
    'CEO',
    'staff',
    'manage',
    'CTO'
];
//Xoa mang di
//Trc khi xoa thi kiem tra xem co ton tai hay khong
//$lastPostionIndex = count($customeArr['special']['postion'])-1;
//unset($customeArr['special']['postion'][$lastPostionIndex]);



//Duyệt mảng hỗn hợp dùng foreach

if (!empty($customeArr) && is_array($customeArr)){
    foreach ($customeArr as $item){
        if (is_array($item)){
            if (!empty($item)){
                echo 'Thong tin khach hang'.'<br/>';
                foreach ($item as $subArr){
                    if (is_array($subArr)){
                        if (!empty($subArr)){
                            echo 'cong viec'.'<br/>';
                            foreach ($subArr as $prosition){
                                echo $prosition.'<br/>';
                            }
                        }
                    }else{
                        echo $subArr.'<br/>';
                    }
                }
                echo '<hr/>';
            }
        }else{
            echo $item.'<hr/>';
        }
    }
}
