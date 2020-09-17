<?php
// github.com/pajaar

error_reporting(0); //hhh :u
header('Content-type: text/plain');

$list = "list.txt";
$pisah = explode("\r\n",file_get_contents($list));

foreach($pisah as $res){
$lol = simplexml_load_file("http://data.alexa.com/data?cli=10&dat=snbamz&url=".$res);
if ($lol->SD[1] == null) {
echo "\n $res => idk:v";
} else {
echo "\n (".$lol->SD[1]->COUNTRY->attributes()->CODE.")";
echo " ".$res." => ";
echo " [Global:".$lol->SD[1]->POPULARITY->attributes()->TEXT."]";
echo " [Country:".$lol->SD[1]->COUNTRY->attributes()->RANK."]"; 
}
}
?>
