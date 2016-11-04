<?php
	$name ='Vũ Hoàng Việt';
	$age = 23;
	$birthday =' 20 tháng 9 năm 1995';
	$height = 1.75;
	$is_married = 1;
	//$is_married = (bool)$is_married;
	//var_dump(is_bool($is_married));

	echo "Tên:",$name,",</br>";
	echo "Tuổi:",$age,",</br>";
	echo "Ngày sinh:",$birthday,",</br>";
	echo "Chiều cao:",$height,"cm,</br>";
	echo "Đã kết hôn:",$is_married,".</br>";

	echo "Letter count:",strlen("Tên:Vũ Hoàng Việt,")+ strlen("Tuổi:23,")+ strlen("Ngày sinhNgày 20 tháng 9 năm 1995,")+ strlen("Chiều cao:1.75cm,")+strlen("Đã kết hôn:.")."</br>";
	echo "Word count:",str_word_count("Tên:Vũ Hoàng Việt,Tuổi:23,Ngày sinh: 20 tháng 9 năm 1995,Chiều cao:1.75cm,Đã kết hôn:."),"</br>";

	$text ="Tên:Vũ Hoàng Việt,Tuổi:23,Ngày sinh: 20 tháng 9 năm 1995,Chiều cao:1.75cm,Đã kết hôn:.";
	$find1 ="Ngày sinh";
	$find2 ="Tuổi";
	$pos = strpos($text,$find1);
	$pos1 = strpos($text,$find2);
	echo "vị trí của text Ngày sinh:",$pos,"</br>";
	echo "vị trí của text tuổi:",$pos1;
