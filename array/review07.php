<?php
require_once 'functions.php';
$menuArr = [
    [
        'title' => 'Trang chủ',
        'link' => '#'
    ],
    [
        'title' => 'Giới thiệu',
        'link' => '#'
    ],
    [
        'title' => 'Dịch vụ',
        'link' => '#',
        'sub'   => [
            [
                'title' => 'Thiết kế web',
                'link'  => '#'
            ],
            [
                'title' => 'Dịch vụ seo',
                'link'  => '#',
                'sub'   => [
                    [
                        'title' => 'Quản lý bán hàng',
                        'link'  => '#'
                    ],
                    [
                        'title' => 'Quản lý khách hàng',
                        'link'  => '#'
                    ]
                ]
            ],
            [
                'title' => 'Thiết kế web wordpress',
                'link'  => '#'
            ],
        ]
    ],
    [
        'title' => 'Tin tức',
        'link' => '#'
    ]
    ,
    [
        'title' => 'Liên hệ',
        'link' => '#'
    ]
];

echo '<pre>'; print_r(buildMenu($menuArr)); echo '</pre>';
?>
<!-- <ul class="menu">
    <li><a href="">Trang chủ</a></li>
    <li><a href="">Giới thiệu </a></li>
    <li><a href="">Dịch vụ</a></li>
        <ul class="sub_menu">
            <li><a href="">Thiết kế web</a></li>
            <li><a href="">Dịch vụ seo</a></li>
                <ul class="sub_menu">
                    <li><a href="">Quản lý bán hàng</a></li>
                    <li><a href="">Quản lý khách hàng</a></li>
                </ul>
            <li><a href="">Thiết kế web wordpress</a></li>
        </ul>
    <li><a href="">Tin tức</a></li>
    <li><a href="">Liên hệ</a></li>
</ul> -->