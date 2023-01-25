<?php
    session_start();
    require 'owner_functionlogin.php';

    if( isset($_POST["login"]) ){
        $username = $_POST["username"];
        $password = $_POST["password"];

        $qry = mysqli_query($conn,"SELECT * FROM user WHERE username = '$username' AND password = md5('$password')");
        $cek = mysqli_num_rows($qry);
            
        if($cek==1){
            //set session
            $_SESSION["login"] = true;

            header("location:owner_vieworder.php");
            exit;
        }

        else{
            echo "<script> alert('Maaf, username/password salah! Silahkan login ulang.'); </script>";
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="owner_login.css" />
        <title> OWNER LOGIN PAGE </title>
    </head>

    <body>
        <div class="content">
            <form action="" method="post" class="login">
                <p class="login-text" style="font-size: 2rem; font-weight: 800;"> Login </p>
                <div class="input">
                    <input type="username" placeholder="Username" name="username" required>
                </div>
                <div class="input">
                    <input type="password" placeholder="Password" name="password" required>
                </div>
                <div class="input">
                    <button type="submit" name="login" class="btn"> Login </button>
                </div>
            </form>
        </div>
    </body>
</html>