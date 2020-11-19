<?php
    if(isset($_POST["submit"])) {
        $username = htmlentities($_POST["username"]);

        setCookie("username", $username, time() + 3600); //Setting a cookie for an hour - 3600 seconds

        header("Location: page2.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Cookie</title>
</head>
<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input type="text" name="username" class="form-control" placeholder="Enter username">
        <br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>