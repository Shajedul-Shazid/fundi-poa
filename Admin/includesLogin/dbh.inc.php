<?php

$DBhost="localhost";
$DBuser="root";
$DBpass="";
$DBname="fundi_poa";
$conn=mysqli_connect($DBhost,$DBuser,$DBpass,$DBname);
mysqli_set_charset($conn, "utf8");

if(!$conn){
    die("Conection failed:".mysqli_connect_error());
}
