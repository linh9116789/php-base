<?php 
$customerArr = [
    [
        'name' => 'linh1 Nguyễn văn',
        'age'  => 26,
    ],
    [
        'name' => 'linh2 Trần Văn',
        'age'  => 27,
    ],
    [
        'name' => 'linh3 văn',
        'age'  => 100,
    ],
    [
        'name' => 'linh trần',
        'age'  => 23,
    ]
];

$keyword = 'trần';//Từ khóa cần tìm kiếm
$result = [];//Giả định kết quả ban đầu
if (!empty($customerArr)){
    foreach($customerArr as $item){
        //So sanh doi tuong
        $customerName = $item['name'];
        $customerName = mb_strtolower($customerName, 'UTF-8');
        $checkSearch = mb_strpos($customerName, $keyword, null, 'UTF-8');
        if ($checkSearch!==false){
            $result[]= $item;
            // break;
        }
    }
}
echo '<pre>';
print_r($result);
echo '</pre>';