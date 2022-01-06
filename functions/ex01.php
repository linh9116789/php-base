<?php
/*
- Cú pháp định nghĩa hàm
- function ten_ham(danh_sach_tham_so){
    //Nội dung hàm
}
-ten_ham: Do chúng ta tự đặt (Động từ)
+ do
+ make
+ create
+ build
- danh_sach_tham_so: Danh sách các biến cách nhau bởi dấu phẩy (,)
- Bên trong cặp ngoặc {} là nội dung hàm
- Cú pháp gọi hàm
ten_ham(danh_sach_tham_tri)
**/
//Định nghĩa hàm
function makeTotal($a, $b){
    $total = $a + $b;
    echo 'Total: '.$a.'+'.$b.'='.$total;
}
//Gọi hàm
makeTotal(5, 10);
