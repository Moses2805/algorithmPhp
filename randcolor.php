<?php

$array = array("0", "1", "2", "3", "4", "5", "6",
 "7", "8", "9", "a", "b", "c", "d", "e", "f");

 $color = "#".$array[rand(0,15)].$array[rand(0,15)].$array[rand(0,15)].$array[rand(0,15)].$array[rand(0,15)].$array[rand(0,15)];

 ?>

 <span style="color:<?php echo $color; ?>; font-size: 30px;">Salam, Dunya</span>
