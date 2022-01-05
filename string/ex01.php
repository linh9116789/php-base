<?php
/* Các hàm xử lý chuỗi*/
$str = 'Lập trình "PHP"';

//Xử lý chuỗi

//1.thêm ký tự escape vào phía trước các ký tự mong muốn 
//addslashes($str, $listChar)
$str = addcslashes($str, '"');
echo $str.'<br/>';

//2.Thêm ký tự escape vào phía trước dấu ".',|
$str = 'Lập \ trình "PHP"';
$str = addslashes($str);
echo $str.'<br/>';

//3. Loại bỏ tất cả các ký tự escape có trong chuỗi
$str = stripslashes($str);
echo $str.'<br/>';

//4. Chuyển chuỗi thành mảng

$arr = 'Lập trình PHP';
$arr = explode(' ',$arr);
print_r($arr);
echo '<br/>';

//5. Chuyển mảng thành chuỗi 
$str = implode(' ',$arr);
echo $str.'<br/>';

//6. Trả về độ dài của 1 chuỗi
// $str = strlen($str);//không hỗ trợ khi chữ có dấu 
$str = mb_strlen($str);//hỗ trợ khi chữ có dấu 
echo 'Độ dài của chuỗi là:'.$str.'<br/>';

//7. Lấy số chữ trong chuỗi (chữ tiếng việt đc tính là kí tự đặc biệt)
$str = 'Xin chao php';
$wordCount = str_word_count($str);
echo 'số chữ là :'.$wordCount.'<br/>';

//8. Lặp chuỗi với n lần n là số lần xác định
$str = 'php ';
$str = str_repeat($str, 5);
echo $str.'<br/>';

//9. Tìm kiếm và thay thế
$str = 'Lập trình "PHP"';
$str = str_replace('"PHP"','CSS', $str);
echo $str.'<br/>';

//10. Mã hóa 1 chiều (32 ký tự)
$str = 'php';
$str = md5($str);
echo $str.'<br/>';

//11. Mã hóa 1 chiều (40 ký tự)
$str = 'php';
$str = sha1($str);
echo $str.'<br/>';

//12. chuyển chuỗi HTML thành dạng thực thể tương tự có htmlspecialchars()
$str = '<p>lập trình php</p>';
$str = htmlentities($str);
echo $str;

//13. Chuyển từ dạng thực thể sang chuỗi HTML
$str = html_entity_decode($str);
echo $str.'<br/>';

//14. Loại bỏ thẻ html
$str = '<p>Lập trình <a href="html.php">trong</a> <strong>PHP</strong></p>';
$str = strip_tags($str, '<a>'); //cho phép thẻ a vẫn được tồn tại
echo $str.'<br/>';

//15. Lấy chuỗi con từ chuỗi cha
$str = 'Laaap trình php';
$subStr = substr($str, 0, 5); //bắt đầu từ 0 lấy đến số kí tự là 5
echo $subStr.'<br/>';

//16.Tách chuỗi từ ký tự cho trước đến hết chuỗi
$str = 'dev.php@gmail.com';
$strSub =  strstr($str, '.');
echo $strSub.'<br/>';

//17. Tìm chuỗi và trả về số thứ tự
$str = 'lap trinh php';
$postion = strpos($str,'php');
var_dump($postion);
echo '<br/>';

//18. Cắt bỏ và thay thế chuỗi bằng 1 chuỗi con khác
/**
 * Chèn và đè 
 */
$str = 'lập trình php';
$str = substr_replace($str, 'php', 4,1);
echo $str.'<br/>';

//19. Chuyển các ký tự hoa sang ký tự thường
$str = 'Lập TRÌnh PhP';
// $str = strtolower($str);//không hỗ trợ khi chữ có dấu
$str = mb_strtolower($str, 'UTF-8');//hỗ trợ khi chữ có dấu 
echo $str.'<br/>';

//20. Chuyển các ký tự hoa sang ký tự Hoa
$str = 'lập trình php';
// $str = strtoupper($str); //không hỗ trợ khi chữ có dấu
$str = mb_strtoupper($str, 'UTF-8');//hỗ trợ khi chữ có dấu
echo $str.'<br/>';

//21. Chuyển chữ cái đầu tiên thành chữ viết hoa hàm ngược lại lcfirst($str)
$str = 'lập trình php';
$str = ucfirst($str);
echo $str.'<br/>';

//22. Chuyển ký tự đầu tiên thuộc chữ trong chuối
$str = 'lập trình php';
$str = ucwords($str);
echo $str.'<br/>';

//23. Xóa ký tự đầu, cuối 
$str = ' Lap trinh php ';
$str = trim($str, ' L');
var_dump($str);
echo '<br/>';

$url = 'https://google.com/';
$url = trim($url, '/');
echo $url.'<br/>';

//24. Xóa ký tự bên trái
$str = ' Lap trinh php ';
$str = ltrim($str);
var_dump($str);
echo '<br/>';

//24. Xóa ký tự bên phải
$str = ' Lap trinh php ';
$str = rtrim($str);
var_dump($str);
echo '<br/>';

//25. Tách chuỗi lớn thành từng chuỗi nhỏ
$str = '12121212';
$str = chunk_split($str, 2, ':');
$str = trim($str, ':');
echo $str.'<br/>';

//26. Chuyển ký tự xuống dòng (\n) thành thẻ </br>
$str = "lap trinh \n php";
$str = nl2br($str);
echo $str.'<br/>';

//27. Chuyển Json thành mảng hoặc Object
$strJson = '{"item1":"Value1", "item2":"Value2"}';
echo $strJson.'<br/>';

// $jsonArr = json_decode($strJson); //là 1 object
$jsonArr = json_decode($strJson, true); //thêm true thì sẽ thành 1 mảng
print_r($jsonArr); //vì là mảng hoặc object nên dùng print_r()
echo '<br/>';

//29. Chuyển từ mảng, Object thành Json
$strJson = json_encode($jsonArr);
echo $strJson;

/**
 * Tham khảo thêm ở https://www.php.net/manual/en/ref.strings.php
 */