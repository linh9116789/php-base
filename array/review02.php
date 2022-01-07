<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Customer</title>
</head>
<?php 
$customerArr = [
    [
        'name' => 'linh',
        'email'=> 'linhtran1.dev@gmail.com',
        'phone' => '0123456789',
        'address' => 'Vung tau1'
    ],
    [
        'name' => 'linh2',
        'email'=> 'linhtran2.dev@gmail.com',
        'phone' => '0123456789',
        'address' => 'Vung tau'
    ],
    [
        'name' => 'linh3',
        'email'=> 'linhtran3.dev@gmail.com',
        'phone' => '0123456789',
        'address' => 'Vung tau'
    ],
    [
        'name' => 'linh3',
        'email'=> 'linhtran3.dev@gmail.com',
        'phone' => '0123456789',
        'address' => 'Vung tau'
    ],
    [
        'name' => 'linh3',
        'email'=> 'linhtran3.dev@gmail.com',
        'phone' => '0123456789',
        'address' => 'Vung tau'
    ],
    [
        'name' => 'linh3',
        'email'=> 'linhtran3.dev@gmail.com',
        'phone' => '0123456789',
        'address' => 'Vung tau'
    ]
];

//Xử lý dữ liệu trùng
if (!empty($customerArr)){
    //Tim phan tu mang trung
    $indexDiplicate = []; //Luu du lie bi trung
    for ($i = 0; $i<count($customerArr)-1; $i++){
        for ($j = $i+1; $j<count($customerArr); $j++){
            if ($customerArr[$i]['email']==$customerArr[$j]['email']){
                $indexDiplicate[] = $j;
            }
        }
    }

    //Xoa cac phan tu mang trung
    if (!empty($indexDiplicate)){
        foreach ($indexDiplicate as $index){
            if (isset($customerArr[$index])){
                unset($customerArr[$index]);
            }
        }
    }
}

?>
<body>
    <table width="100%" border="1" cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th with="5%">STT</th>
                <th>Ho ten</th>
                <th>Email</th>
                <th>Dien thoai</th>
                <th>Dia chi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (!empty($customerArr) && is_array($customerArr)):
                foreach($customerArr as $key => $item):
            ?>
            <tr>
                <td><?php echo $key ?></td>
                <td><?php echo $item['name'] ?></td>
                <td><?php echo $item['email'] ?></td>
                <td><?php echo $item['phone'] ?></td>
                <td><?php echo $item['address'] ?></td>
            </tr>
            <?php endforeach; else:?>
            <tr>
                <td colspan="5" style="text-align: center;color:red;">Hiện chưa có dữ liệu</td>
            </tr>
            <?php endif;?>
        </tbody>
    </table>
</body>
</html>