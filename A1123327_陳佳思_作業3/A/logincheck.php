<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: login.php");
    exit;
}

$userId = trim($_POST["user_id"] ?? "");
$password = trim($_POST["password"] ?? "");

$users = [
    "student" => ["password" => "s123", "role" => "student"],
    "teacher" => ["password" => "t123", "role" => "teacher"],
    "admin" => ["password" => "a123", "role" => "admin"]
];

if (isset($users[$userId]) && $users[$userId]["password"] === $password) {
    $_SESSION["logged_in"] = true;
    $_SESSION["user_id"] = $userId;
    $_SESSION["role"] = $users[$userId]["role"];

    setcookie("user_id", $userId, time() + 3600, "/");

    if ($_SESSION["role"] === "student") {
        header("Location: student.php");
        exit;
    }

    if ($_SESSION["role"] === "teacher") {
        header("Location: teacher.php");
        exit;
    }

    if ($_SESSION["role"] === "admin") {
        header("Location: admin.php");
        exit;
    }
}

echo "<h2>Login failed</h2>";
echo "<p><a href='login.php'>Back to Login</a></p>";
?>
