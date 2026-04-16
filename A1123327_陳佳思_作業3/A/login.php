<?php
session_start();

$rememberedUser = $_COOKIE["user_id"] ?? "";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 500px;
            margin: 40px auto;
            line-height: 1.8;
        }

        input {
            padding: 6px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <h2>Login Page</h2>

    <?php if ($rememberedUser !== ""): ?>
        <p>Welcome back, <?= htmlspecialchars($rememberedUser) ?>!</p>
        <p><a href="deletecookie.php">Delete Cookie</a></p>
    <?php endif; ?>

    <form action="logincheck.php" method="post">
        <label for="user_id">ID:</label><br>
        <input type="text" name="user_id" id="user_id" value="<?= htmlspecialchars($rememberedUser) ?>"><br>

        <label for="password">Password:</label><br>
        <input type="password" name="password" id="password"><br>

        <input type="submit" value="Login">
    </form>

    <p>Student: `student / s123`</p>
    <p>Teacher: `teacher / t123`</p>
    <p>Admin: `admin / a123`</p>
</body>
</html>
