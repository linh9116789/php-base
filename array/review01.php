<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

.navbar {
  overflow: hidden;
  background-color: #333;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>
<body>
    <?php 
    $menuArr = [
        [
            'title' => 'Home',
            'link'  => '#',
            'class' => ''
        ],
        [
            'title' => 'News',
            'link'  => '#',
            'class' => ''
        ],
        [
            'title' => 'Dropdown',
            'link'  => '#',
            'class' => '',
            'sub' => [
                [
                    'title'=> 'link4',
                    'link' => '#'
                ],
                [
                    'title'=> 'link5',
                    'link' => '#'
                ],
                [
                    'title'=> 'link6',
                    'link' => '#'
                ]
            ]
        ]
    ];
    // echo '<pre>';
    // print_r ($menuArr);
    // echo '</pre>';

    if (!empty($menuArr)){
        echo '<div class="navbar">';
        //foreach loop
        foreach ($menuArr as $item){
            $class = !empty($item['class']) ? 'class="'.$item['class'].'"': null;
            
            echo '<a '.$class.' href="'.$item['link'].'">'.$item['title'].'</a>';
            //dropdown
            if (!empty($item['sub'])){
                $subMenu = $item['sub'];
                echo '<div class="dropdown"><button class="dropbtn">Dropdown 
                </button><div class = "dropdown-content">';

                foreach ($subMenu as $sub){
                    echo '<a href="'.$sub['link'].'">'.$sub['title'].'</a>';
                }
                echo'</div></div>';
            }
        }
        echo '</div>';
    }
    ?>
</body>
</html>