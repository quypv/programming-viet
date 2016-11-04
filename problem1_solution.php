<?php

$name ='Vũ Hoàng Việt';
$age = 23;
$birthday ='20/9/1995';
$height = 1.75;
$is_married = true;

$profile = "Tên:".$name.",<br>".
    "Tuổi:".$age.",<br>".
    "Ngày sinh:".$birthday.",<br>".
    "Chiều cao:".$height."cm,<br>".
    "Đã kết hôn:".$is_married.".<br>";

echo $profile;

//Count except line break <br>
echo "<br>";
echo "Letter count:".strlen(str_replace("<br>", "", $profile))."<br>";

//Word count
echo "Word count:".str_word_count(str_replace("<br>", "", $profile))."<br>";

//Find text "Ngày sinh"
echo "<br>";
echo "Vị trí của text Ngày sinh:".strpos($profile, "Ngày sinh")."<br>";
echo "Vị trí của text tuổi:".strpos($profile, "tuổi")."<br>";
