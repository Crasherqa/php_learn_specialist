<?php
$var = "HELLO";
$i=0;
$a = mb_strlen($var);
while ($i < $a) {
	echo $var[$i] . "\n";
	$i++;
}
?>