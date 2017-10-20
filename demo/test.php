<?php

function my_count($var) {
	$count = 0;
	if (is_array($var)) {
		foreach ($var as $val) {
			$count++;

		}
		return $count;
	}elseif (is_null($var)) {
		return 0;
	}else{
		return 1;
	}
}


$arr = [2, 5, 7, 8];
echo my_count($arr);




// $arr = [
// 	"name"=>"John",
// 	"login"=>"root",
// 	"age"=>25
// ];

// foreach ($arr as $key=>$val) {
// 	echo "$key : $val<br>";
// }

// $array = [1, 2, 3, 4, 5];

// print_r($array);

// foreach ($array as $value) {
// 	$value *= 10;
// }

// print_r($array);


