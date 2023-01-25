<?php
    session_start();
    require 'owner_functionlogin.php';

    if( isset($_POST["welcome"]) ){
        //set session
        $_SESSION["login"] = true;

        header("location:client_viewmenu.php");
        exit;
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="client_welcome.css" />
        <title> PURPLE RESTAURANT HOME </title>
    </head>

    <body>
        <div class="content">
            <form action="" method="POST" class="welcome">
                <h1> WELCOME! </h1> <br/>
                <h2> TO PURPLE RESTAURANT PAGE </h2>
                 
                <div class="input">
                    <button type="submit" name="welcome" class="btn"> Enter Restaurant Page </button>
                </div>
            </form>
        </div>
    </body>
</html>