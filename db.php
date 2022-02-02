<?php

$server="sql301.epizy.com";
$username="epiz_30959964";
$password="WCAeCXaVvm";
$dbname="epiz_30959964_gallery";

$conn=mysqli_connect($server,$username,$password,$dbname);

if(!conn){
    die("Connection Failer: ".mysqli_connect_error());
}
?>