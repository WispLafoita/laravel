<?php

function geturl($dbconnect, $query){
	if(isset($_GET['url'])){
$url = $_GET['url'];
}else{
$url='index';
}
$query = "SELECT * FROM maintexts WHERE url='$url'";
$adr = mysqli_query($dbconnect, $query);
if(!$adr){
exit('error query');
}
$arr = mysqli_fetch_array($adr);
	return $arr;
}

/* ===Распечатка массива=== */
function print_arr($arr){
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
}
/* ===Распечатка массива=== */
