<?php
	$fruit = array("cam", "quýt","mít", "dừa");
	print_r($fruit);
	echo "Độ dài của mảng: ".count($fruit)."</br>";
	$fruitCount = array("cam"=>10,"quýt"=>22,"mít"=>4,"dừa"=>9);
	print_r($fruitCount);
	echo "Độ dài của mảng: ".count($fruitCount)."</br>";
	echo $fruitCount['quýt']."</br>";
	$students = array (
    'A1' => ['Nam', 'Hải', 'Tuấn'],
    'A2' => ['Hiền', 'Dung', 'Tâm'],
    'A3' => ['Phong', 'Ly', 'Cường']
	);
	echo $students['A1'][0]."</br>";
	echo $students['A2'][2]."</br>";
	echo $students['A3'][1];
