<?php
    session_start();
    if( !isset($_SESSION["login"]) ){
        header("Location : owner_login.php");
        exit;
    }

    require 'owner_functionorder.php';

    $form_order = query("SELECT * FROM form_order");
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
            <h2> DAFTAR PEMESANAN MENU </h2>
            <center>
                <table border="3" class="table" cellpadding="10" cellspacing="0">
                    <tr>
                        <th> Date </th>
                        <th> Nama Pemesan </th>
                        <th> No. Meja </th>
                        <th> Seafood Menu </th>
                        <th> Steaks Menu </th>
                        <th> Salads Menu </th>
                        <th> Drinks Menu </th>
                        <th> Desserts Menu </th>
                        <!-- STATUS dirubah lewat phpmyadmin -->
                        <th> Status </th>
                    </tr>

                    <?php
                            foreach($form_order as $order):
                        ?>
                        <tr>
                            <td> <?= $order["date"]?> </td>
                            <td> <?= $order["name"]?> </td>
                            <td> <?= $order["number"]?> </td>
                            <td> <?= $order["seafood"]?> </td>
                            <td> <?= $order["steak"]?> </td>
                            <td> <?= $order["salad"]?> </td>
                            <td> <?= $order["drink"]?> </td>
                            <td> <?= $order["dessert"]?> </td>
                            <td> <?= $order["status"]?> </td>
                        </tr>
                        <?php 
                            endforeach;
                        ?>
                </table>
            </center>
        </div>

    </body>
</html>