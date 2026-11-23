<?php
$conn=mysqli_connect("localhost","root","","student_management");
if(!$conn){
    die("connection failed". mysqli_connect_error());
}
echo "connected sussessfully"
?>