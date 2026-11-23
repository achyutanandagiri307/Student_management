<?php
include "db.php";
$name=$_POST['sname'];
$email=$_POST['semail'];
$pass=$_POST['Password'];
$username=$_POST['susername'];
//password hashing
$hashedpass=password_hash($pass,PASSWORD_DEFAULT);
$sql = "INSERT INTO students (NAME, Email, USER_NAME, PASSWORD)
        VALUES (?,?,?,?)";
$stmt=mysqli_prepare($conn,$sql);
mysqli_stmt_bind_param($stmt,"ssss",$name,$email,$username,$hashedpass);
if(mysqli_stmt_execute($stmt)){
  echo "Singup Sucessful";
  header("Refresh: 2; URL=index1.html");
}
else{
    echo"singup Failled";
   header("Refresh: 2; URL=index1.html");
}
mysqli_stmt_close($stmt);
mysqli_close($conn);
?>