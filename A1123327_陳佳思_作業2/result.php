<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nName = $_POST["nName"];
    $mGender = $_POST["mGender"];
    $birthday = $_POST["birthday"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $location = $_POST["location"];
    $transport = $_POST["transport"];
    $interest_other = $_POST["interest_other"];

} else {
    echo "No data submitted!";
    exit();
}

?>

<html>
<head>
    <title>Registration Result</title>
</head>

<body bgcolor="#fffcc9">

    <center>
        <font color="#6B6325">
            <h1><u>LET'S GO 夏令營 2026</u></h1>
            <h2>Registration Result</h2>
        </font>
    </center>

    <table border="1" align="center" cellpadding="10" bgcolor="white">
        <tr>
            <td colspan="2" align="center"><b>Your Registration Information</b></td>
        </tr>

        <tr>
            <td>Name</td>
            <td><?php echo $nName; ?></td>
        </tr>

        <tr>
            <td>Gender</td>
            <td><?php echo $mGender; ?></td>
        </tr>

        <tr>
            <td>Birthday</td>
            <td><?php echo $birthday; ?></td>
        </tr>

        <tr>
            <td>Email</td>
            <td><?php echo $email; ?></td>
        </tr>

        <tr>
            <td>Phone</td>
            <td><?php echo $phone; ?></td>
        </tr>

        <tr>
            <td>Where are you from</td>
            <td><?php echo $location; ?></td>
        </tr>

        <tr>
            <td>Transportation</td>
            <td><?php echo $transport; ?></td>
        </tr>

        <tr>
            <td>Other Interest</td>
            <td><?php echo $interest_other; ?></td>
        </tr>
    </table>

    <center>
        <br>
        <a href="form.php">Back to Form</a>
    </center>

</body>
</html>
