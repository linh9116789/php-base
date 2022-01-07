<?php
/**
 * - Vấn đề khi duyệt(Đọc) mảng
 * - Mảng đa chiều
 * - Duyệt (đọc) mảng đa chiều 
 */

 $customerArr = 'php';
// !empty Kiểm tra xem mảng có dữ liệu hay không 
// is_array kiểm tra xem có phải là mảng hay không
//  if (!empty($customerArr) && is_array($customerArr)){
//      foreach ($customerArr as $key => $value){
//          echo $value.'<br/>';
//      }
//  }else{
//      echo 'Mang khong hop le';
//  }

/**
 * Trước khi duyệt mảng:
 * 1. Kiểm tra biến tồn tại
 * 2. Kiểm tra biến là mảng (is_array)
 * 3. Kiểm tra mảng có phần tử 
 * =>1 và 3 dùng hàm empty()
 */