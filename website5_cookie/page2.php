<?php
    setCookie("username", "Frank", time() + (86400 * 30));

    //Delete cookie
    // setCookie("username", "Frank", time() - 3600);

    //Cookies are set if greater than 0
    if(count($_COOKIE) > 0) {
        echo "There are ".count($_COOKIE). " cookies saved <br>";
    } else {
        echo "There are no cookies saved";
    }

    if(isset($_COOKIE["username"])){
        echo "User ". $_COOKIE["username"] . " is set <br>";
    } else {
        echo "User is not set";
    }

    // header("Location: page3.php");

?>