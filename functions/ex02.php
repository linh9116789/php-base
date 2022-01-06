<?php
/**
 * Hàm không giới hạn tham số
 * Giải thuật đệ quy
 * +Hiển thị các bài toán kiểu đa cấp: Chuyên mục, menu
 * +Phân cấp url, breadcrumbs,...
 */

//C1: Không giới hạn tham số
// function getMessage(){
//     $params = func_get_args();
//     print_r($params);
// }
//C2: Không giới hạn tham số
// function getMessage(...$params){
//     print_r($params);
// }
// getMessage(1, 2, 3, 4);

/**
 * Hiển thị dãy số fibonanci thứ n
 * Hiển thị n+1 số đầu tiên
 * Dùng phương pháp đệ quy
 */

function fibonacci($n){
    if ($n==0 || $n==1){
        return $n;
    }
    // var_dump($n);
    return fibonacci($n-1)+fibonacci($n-2);
}
//Hiển thị dãy fibonacci
$n = 10;//10 số đầu tiên

for($i = 0; $i<=$n; $i++){
    echo fibonacci($i).' ';
}
// echo fibonacci(7);