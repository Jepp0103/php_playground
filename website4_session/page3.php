<?php
    session_start(); //Creating a session to store data in temprorary memory

    $name = isset($_SESSION["name"]) ? $_SESSION['name']
        : "Guest";
    $email = $_SESSION["email"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Sessions</title>
</head>
<body>
    <h1>Hello <?php echo $name; ?> </h1>
    <a href="page4.php">Go to page 4</a>
</body>
</html>