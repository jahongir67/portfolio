<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login MySQL</title>
</head>
<body>
    <form action="<?php $_SERVER["PHP_SELF"];?>" method="post" style="border:2px solid black;">
        <input type="text" name="name" id="name" placeholder="Sizning ismingiz...">
        <br><br>
        <input type="email" name="email" id="email" placeholder="Sizning email...">
        <br><br>
        <input type="password" name="password" id="password" placeholder="Sizning parolingiz...">
        <br><br>
        <input type="submit" value="Submit">
    </form>

    <?php
    $ism = $_POST["name"];
    $e = $_POST["email"];
    $pass = $_POST["password"];

    $db = new mysqli("localhost", "root", "", "users");

    if(!empty($ism) && !empty($e) && !empty($pass)) {
        $db->query("INSERT INTO odam (ism, email, pass)
        VALUES('$ism', '$e', '$pass')");
    $db->close();
    echo "<h2>Registrasiyadan o'tdingiz ✅</h2>";
    } else if(empty($ism) || empty($e) || empty($pass)) {
        echo "<h2>Registrasiyadan o'tmadingiz ❌</h2>";
    }
    ?>
</body>
</html>