<?php
/**
 * Bản chất của chuỗi 1 mảng ký tự
 * Muốn lấy 1 ký tự, dùng cú pháp: $bienchuoi[chiso]
 * chiso: Bắt đầu từ 0 (Từ trái sang phải)
 */

//  $str = 'hoc lap trinh php';
//  echo $str[0]; //return h

/**
 * -------------------------------------------------------------------------
 * 1. Viết chương trình lấy username của email
 * Input: linhtran.dev@gmail.com
 * Output: linhtran.dev
 */

//Input
$emailInput = 'linhtran.dev@gmail.com';

//Xử lý
//Cách 1:
// $emailProcess = strstr($emailInput, '@'); //Lấy toàn bộ sau @
// $userName = str_replace($emailProcess, '',$emailInput);
//Cách 2:
$userName = strstr($emailInput, '@', true); //Lấy toàn bộ trước @ (thêm tham số true)

//Ouput
echo $userName.'<br/>';

/**
 * -------------------------------------------------------------------------
 * 2. Viết chương trình lấy 5 ký tự ở cuối chuỗi
 */

 //Input
 $strInput = 'lập trình';
 
//Xử lý
// $endStr = substr($strInput, -5);//khi có dấu tiếng việt thì không chính xác

$endStr = mb_substr($strInput, -5, null, 'UTF-8'); // có dấu tiếng việt 

//Output
echo $endStr.'<br/>';

/**
 * -------------------------------------------------------------------------
 * 3. Viết chương trình xóa chữ đầu tiên trong chuỗi
 */

 //Input
 $strInput = 'Lập trình Lập viên PHP';

 //Xử lý
 $positionSpace = mb_strpos($strInput, ' ', null, 'UTF-8'); //Tìm chuỗi cần cắt và trả về số kí tự
 $leftLength = mb_strlen($strInput, 'UTF-8') - ($positionSpace+1);
 $endtWord = mb_substr($strInput, $positionSpace+1, $leftLength);
 $strInput = $endtWord;
 //Output
 echo $strInput.'<br/>';

/**
 * -------------------------------------------------------------------------
 * 4. Viết chương trình đảo ngược chữ đầu và chữ cuối trong mỗi chuỗi
 */

 //Input 
 $strInput = 'Lập trình viên PHP';

 //Xử lý 
 //1. Lấy chữ cái đầu tiên
 $positionSpaceFirst = mb_strpos($strInput, ' ', null, 'UTF-8'); //Tìm chuỗi cần cắt và trả về số kí tự
 $firstWord = mb_substr($strInput, 0, $positionSpace, 'UTF-8');
 //2. Lấy chữ cái cuối cùng
 $positionSpaceEnd = mb_strripos($strInput, ' ', null, 'UTF-8'); //Tìm chuỗi cần cắt và trả về số kí tự
 $leftLength = mb_strlen($strInput, 'UTF-8') - ($positionSpaceEnd-1);
 $endWord = mb_substr($strInput, $positionSpaceEnd +1, $leftLength);
 //3. Chèn và thay thế
 //Lấy nội dụng giữa chuỗi
 $middleWord = mb_substr($strInput, $positionSpaceFirst, $positionSpaceEnd-$positionSpaceFirst+1,'UTF-8');
 //Chèn và đổi chỗ
 $strInput = $endWord.$middleWord.$firstWord;
 //Output
 echo $strInput.'<br/>';

 /**
 * -------------------------------------------------------------------------
 * 5. Nhập vào tên 1 người, viết chương trình in ra:
 * Họ và tên lót
 * Tên
 */

 //Input
 $fullName = 'Trần Lê Khánh';

 //Xử lý
 $positionSpaceLast = mb_strripos($fullName, ' ', null, 'UTF-8'); //hàm tìm kiếm và lấy khoảng trắng cuối trả về số kí tự
 
 $leftLength = mb_strlen($fullName, 'UTF-8')-($positionSpaceLast + 1);
 
 $firstName = mb_substr($fullName, $positionSpaceLast+1, $leftLength, 'UTF-8');

 $lastName = mb_substr($fullName, 0, $positionSpaceLast, 'UTF-8');
 //Output
 echo 'Tên: '.$firstName.'<br/>'.'Họ tên lót: '.$lastName.'<br/>';

 /**
 * -------------------------------------------------------------------------
 * 6. Viết chương trình in ra 50 chữ đầu tiên trong 1 chuỗi
 */
//Input
 $content = 'Alexander Gabuev, chuyên gia tại Trung tâm Carnegie Moscow, nói thời 
 gian không còn nhiều để châu Âu suy nghĩ. Một khi thỏa thuận được ký kết và đường 
 ống được xây xong, Nga có thể bán khí đốt từ mỏ khai thác vốn chỉ xuất sang châu Âu, 
 giúp tăng lợi thế trên bàn đàm phán.';

 //handle
$contentLength = mb_strlen($content, 'UTF-8');
$description = null;
$limitWord = 50;
$count = 0;
for($i = 0; $i<$contentLength; $i++){
    $description .= mb_substr($content, $i, 1, 'UTF-8');
    if (mb_substr($content, $i, 1, 'UTF-8')==' '){
        $count++;
        if ($count >= $limitWord+2){
            break;
        }
    }
}
 //Output
 echo $description.'<br/>';

 /**
 * -------------------------------------------------------------------------
 * 6. Viết chương trình kiểm tra độ mạnh của mật khẩu
 - Có độ dài tối thiểu là 6
 - Chứa ít nhất 1 chữ số (1234567890)
 - Chứa ít nhất 1 chữ cái in thường (abc...z)
 - chứa ít nhất 1 kí tự in hoa (ABC...Z)
 - chứa ít nhất 1 kí tự đặc biệt: (!@#$%^&*()-+)
 */

 $password = 'Linh@123';

 $number = '1234567890';
 $symbol = '!@#$%^&*()-+';

 $checkLength = false;
 $checkNumber = false;
 $checkLower = false;
 $checkUpper = false;
 $checkSymbol = false;

 if (mb_strlen($password, 'UTF-8') >=6){
    $checkLength = true;
 }

 for ($i = 0; $i<mb_strlen($password, 'UTF-8'); $i++){
    $char = mb_substr($password, $i, 1, 'UTF-8');
    if (mb_strpos($number, $char, null, 'UTF-8')!=false){
        $checkNumber = true;
    }

    if ($char>='a' && $char<='z'){
        $checkLower = true;
    }

    if ($char>='A' && $char<='Z'){
        $checkUpper = true;
    }

    if (mb_strpos($symbol, $char, null, 'UTF-8')!=false){
        $checkSymbol = true;
    }
 }

 if ($checkLength && $checkNumber && $checkLower && $checkUpper && $checkSymbol){
    echo 'Mật khẩu mạnh';
 }else{
     echo 'Mật khẩu yếu';
 }