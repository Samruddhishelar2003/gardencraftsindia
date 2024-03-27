<?php
error_reporting(E_ERROR);
$servername="localhost";
$username="root";
$password="";
$dbname="garden";
$conn = mysqli_connect($servername,$username,$password,$dbname);
if($conn)
{
   //echo "Connection ok";
}else
{ 
    echo"Connection failed" .mysqli_connect_error();
}
?>