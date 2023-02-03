<?php
$servername="localhost";
$username="root";
$password="";
$bdname="universidad";

$conn=mysqli_connect($servername,$username,$password,$bdname);
$mysqli=new mysqli($servername,$username,$password,$bdname);
if(!mysqli){
echo("error al conectar".mysqli_connect_error());
}










?>