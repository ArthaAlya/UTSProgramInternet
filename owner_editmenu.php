<?php
    session_start();
    if( !isset($_SESSION["login"]) ){
        header("Location : owner_login.php");
        exit;
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="owner_editmenu.css" />
        <title> OWNER EDIT MENU PAGE </title> 
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
            <h2> EDIT MENU </h2> <br/>

            <center>
                <table cellpadding="15">
                    <th>MENU 1 <br/><br/> <img src="seafood.png" width=100 height=100> <br/> <br/>
                    <button> <a href="owner_editmenu1.php"> SEAFOOD MENU </a> </button></th>
                    <th> </th ><th> </th> <th> </th>
                    <th>MENU 2 <br/><br/> <img src="steak.png" width=100 height=100> <br/> <br/>
                    <button> <a href="owner_editmenu2.php"> STEAKS MENU </a> </button></th>
                    <th> </th><th> </th><th> </th>
                    <th>MENU 3 <br/><br/> <img src="salad.png" width=100 height=100> <br/> <br/>
                    <button> <a href="owner_editmenu3.php"> SALADS MENU </a> </button></th>
                    <th></th><th> </th><th> </th>
                    <th>MENU 4 <br/><br/> <img src="drink.png" width=100 height=100> <br/> <br/>
                    <button> <a href="owner_editmenu4.php"> DRINKS MENU </a> </button></th>
                    <th></th><th> </th><th> </th>
                    <th>MENU 5 <br/><br/> <img src="dessert.png" width=100 height=100> <br/> <br/>
                    <button> <a href="owner_editmenu5.php"> DESSERTS MENU </a> </button></th>
                </table>
            </center>
        </div>

    </body>
</html>