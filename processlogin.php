<?php
session_start();
include "db.php";
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM students WHERE email = ?";

$stmt = mysqli_prepare($conn, $sql);

mysqli_stmt_bind_param($stmt, "s", $email);

mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);

if ($row = mysqli_fetch_assoc($result)) {

    if (password_verify($password, $row['PASSWORD'])) {
        $_SESSION['student'] = $row;

        unset($_SESSION['student']['PASSWORD']);

        header("Location: idcard.php");
exit();
    } else {

        echo "Wrong Password";
        header("Refresh: 2; URL=login.html");

    }

} else {

    echo "User Not Found";
    header("Refresh: 2; URL=login.html");

}

mysqli_stmt_close($stmt);
mysqli_close($conn);
?>