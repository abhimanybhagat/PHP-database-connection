<?php
$servername="localhost";
$username="root";
$password="";
$database="obnews";
$conn=new  mysqli($servername,$username,$password);
if($conn->connect_error){
    die("connection Failed");
}
echo"connection Success";
$conn->close();
?>