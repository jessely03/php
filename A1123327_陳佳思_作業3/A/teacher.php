<?php
session_start();

if (!isset($_SESSION["logged_in"]) || $_SESSION["role"] !== "teacher") {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Teacher Page</title>
</head>
<body>
    <h2>Welcome Teacher</h2>
    <p>Your ID: <?= htmlspecialchars($_SESSION["user_id"]) ?></p>
    <p><a href="logout.php">Logout</a></p>
</body>
</html>
