<?php
$value='10000';
$bad_symbols = array(",", " ");
$value = str_replace($bad_symbols, "", $value);


echo number_format("1000000",2)."<br>";

$str = '10000';
$string=substr($str,2);
echo $str[0].$str[1] ."&nbsp".$string; 
?>