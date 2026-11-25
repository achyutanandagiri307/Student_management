<?php
session_start();

if (!isset($_SESSION['student'])) {
    header("Location: login.php");
    exit();
}

$student = $_SESSION['student'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student ID Card</title>
    <style>
        body {
            font-family: Arial;
            background: #e8eef5;
            display: flex;
            justify-content: center;
            padding-top: 60px;
        }

        .card {
            width: 320px;
            background: white;
            border: 2px solid #1e3a8a;
            border-radius: 12px;
            text-align: center;
            padding: 20px;
        }

        h2 {
            background: #1e3a8a;
            color: white;
            padding: 15px;
        }

        .details {
            text-align: left;
            line-height: 2;
        }
    </style>
</head>
<body>

<div class="card">
    <h2>STUDENT ID CARD</h2>

    <div class="details">
        <p><b>Student ID:</b> <?php echo htmlspecialchars($student['ID']); ?></p>
        <p><b>Name:</b> <?php echo htmlspecialchars($student['NAME']); ?></p>
        <p><b>Email:</b> <?php echo htmlspecialchars($student['Email']); ?></p>
        <p><b>Username:</b> <?php echo htmlspecialchars($student['USER_NAME']); ?></p>
    </div>
</div>

</body>
</html>