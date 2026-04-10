<?php

$user = $_POST["username"];
$pass = $_POST["password"];

if($user == "student" && $pass == "1234"){
    header("Location:form.php");
    
}else{
    echo "<center>";
    echo "<h4> Login Failed </h4>";
    echo "<a href='login.php'>Try Again</a>";
}

?>