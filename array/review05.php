<?php
$customerArr = [
    [
        'name' => 'linh1',
        'age'  => 26,
    ],
    [
        'name' => 'linh2',
        'age'  => 27,
    ],
    [
        'name' => 'linh3',
        'age'  => 100,
    ],
    [
        'name' => 'linh4',
        'age'  => 23,
    ]
];

if (!empty($customerArr)){
    $minCustomerAge = $customerArr[0];//Gia dinh khach hang co tuoi nho nhat
    $maxCustomerAge = $customerArr[0];
    foreach ($customerArr as $item){
        if ($minCustomerAge['age']>=$item['age']){
            $minCustomerAge = $item;
        }

        if ($maxCustomerAge['age']<=$item['age']){
            $maxCustomerAge = $item;
        }
    }
    echo '<pre>';
    print_r($minCustomerAge);
    echo '</pre>';
    echo '<pre>';
    print_r($maxCustomerAge);
    echo '</pre>';
}