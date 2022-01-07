<?php
    function buildMenu($menuArr, $isSub=false){
        if (isset($menuArr)){
            echo ($isSub)?'<ul class="sub_menu">':'<ul class="menu">';
            foreach ($menuArr as $item){
                echo '<li>';
                echo '<a href="'.$item['link'].'">'.$item['title'].'</a>';
                //Submenu
                //Dùng đệ quy để gọi các submenu con
                if (!empty($item['sub'])){
                    buildMenu($item['sub'], true);
                }
                echo '</li>';
            }
            echo '</ul>';
        }
    }