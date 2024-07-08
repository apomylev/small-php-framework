<?php

class Menu {
    
    static function getMainMenu($active) {
        $mainmenu[0] = array('Главная', '/', 'home.png');
        $mainmenu[1] = array('Раздел1', '/preview/part1', 'part1.png');
        $mainmenu[2] = array('Раздел2', '/preview/part2', 'part2.png');
        $mainmenu[3] = array('Раздел3', '/preview/part3', 'part3.png');
        $mainmenu[4] = array('Раздел4', '/preview/part4', 'part4.png');
       	foreach ($mainmenu as $menurow) {
            if ($active == $menurow[0]) {$flag='menuitemactive';} else {$flag=null;};
            echo '<a href="'.$menurow[1].'" class="tdnone linkblack">'
                . '<div class="menuitem '.$flag.'">'
                . '<img src="/img/'.$menurow[2].'" class="icons">'.$menurow[0].'</div></a>'.chr(10);
        };
    }
    
    static function getSubMenu1 () {
        $submenu[0] = array('Подраздел 1 раздела 1', '/part1/subpart1');
        $submenu[1] = array('Подраздел 2 раздела 1', '/part1/subpart2');
        $submenu[2] = array('Подраздел 3 раздела 1', '/part1/subpart3');
        $submenu[3] = array('Подраздел 4 раздела 1', '/part1/subpart4');
        $submenu[4] = array('Подраздел 5 раздела 1', '/part1/subpart5');
        $submenu[5] = array('Подраздел 6 раздела 1', '/part1/subpart6');
        $submenu[6] = array('Подраздел 7 раздела 1', '/part1/subpart7');
        self::getSubMenu($submenu);
    }
    
    static function getSubMenu ($submenu) {
        echo '<div class="line"></div>'.chr(10);
        foreach ($submenu as $menurow) echo '<a href="'.$menurow[1].'" class="tdnone linkblack">'
            . '<div class="menuitem">'.$menurow[0].'</div></a>'.chr(10);
    }
}

?>