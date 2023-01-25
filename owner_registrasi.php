<?php
    session_start();
    if( !isset($_SESSION["login"]) ){
        header("Location : owner_login.php");
        exit;
    }

    require 'owner_functionorder.php';

    $user = query("SELECT * FROM user");

    if(isset($_POST["register"])){
        if( registrasi ($_POST) > 0 ){
            echo "<script> alert('User baru berhasil ditambahkan!'); </script>";
        }
        else{
            echo mysqli_error($conn);
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="owner_editmenu.css" />
        <title> OWNER VIEW ORDER PAGE </title> 
    </head>

    <body>
        <div class="header">
            <h1> PURPLE RESTAURANT </h1>
        </div>

        <div class="topnav">
            <!-- sambungkan href ke file owner_vieworder.php -->
            <a href="owner_vieworder.php"> View Order </a>
            <!-- sambungkan href ke file owner_editmenu.php -->
            <a href="owner_editmenu.php"> Edit Menu </a>
            <!-- sambungkan href ke file owner_registrasi.php-->
            <a href="owner_registrasi.php"> Registrasi Pegawai </a>
            <!-- sambungkan href ke file owner_logout.php -->
            <a href="owner_logout.php" style="float:right"> Exit </a>
        </div>

        <div class="row">
            <h2> DAFTAR PEGAWAI </h2>
            <center>
                <table border="3" class="table" cellpadding="15" cellspacing="0">
                    <tr>
                        <th> Nama Admin </th>
                        <th> Password (md5 password protection code) </th>
                    </tr>

                    <?php
                            foreach($user as $admin):
                        ?>
                        <tr>
                            <td> <?= $admin["username"]?> </td>
                            <td> <?= $admin["password"]?> </td>
                        </tr>
                        <?php 
                            endforeach;
                        ?>
                </table>
            </center>

            <br/><br/><br/>

            <h2> REGISTRASI PEGAWAI </h2>
            <center>
                <form action="" method="post">
                    <table border="3" class="table" cellpadding="10" cellspacing="0">
                        <label for="username"> Username : </label>
                        <input type="text" name="username" id="username"> <br/><br/>

                        <label for="password"> Password : </label>
                        <input type="password" name="password" id="password"> <br/><br/>

                        <button type="submit" name="register"> Register </button>
                    </table>
                </form>
            </center>
        </div>

    </body>
</html>