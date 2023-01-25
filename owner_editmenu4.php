<?php
    session_start();
    if( !isset($_SESSION["login"]) ){
        header("Location : owner_login.php");
        exit;
    }

    require 'owner_functionmenu4.php';

    $drink = query("SELECT * FROM drink");

    //jika tombol cari di klik
    if(isset($_POST["cari"])){
        $drink = cari($_POST["keyword"]);
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
            <h2> EDIT MENU </h2><br/>
            <form action="" method="post">
                <input type="text" name="keyword" size="50" autofocus placeholder="Masukkan nama menu atau harga yang ingin dicari" autocomplete="off">
                <button type="submit" name="cari"> Search </button>
            </form><br/><br/>
            
            <center>
                <fieldset>
                    <legend> <b style="color: brown;"> <i> DRINK MENU </i> </b> </legend>
                    <!-- sambungkan href ke file owner_inputmenu4.php-->
                    <a href="owner_inputmenu4.php" style="float: left;"> + Input new menu </a> <br/><br/>

                    <table border="1" class="table" cellpadding="15" cellspacing="0">
                        <tr>
                            <th> Name </th>
                            <th> Photo </th>
                            <th> Price </th>
                            <th> Option </th>
                        </tr>

                        <?php
                            foreach($drink as $menu4):
                        ?>
                        <tr>
                            <td> <?= $menu4["name4"]?> </td>
                            <td> <img src="img/<?= $menu4["photo4"]?>" width="150" height="100"> </td>
                            <td> <?= $menu4["price4"]?> </td>
                            <td>
                                <!-- Isi link href dengan owner_changemenu4.php --> 
                                <a href="owner_changemenu4.php?id=<?= $menu4["id"]?>"> Change </a> |
                                <!-- Isi link href dengan owner_deletemenu4.php --> 
                                <a href="owner_deletemenu4.php?id=<?= $menu4["id"]?>"
                                    onclick="return confirm('Apakah Anda yakin akan menghapus menu ini?');"> Delete </a>
                            </td>
                        </tr>
                        <?php 
                            endforeach;
                        ?>
                    </table>
                    <br/>
                </fieldset>
            </center>
        </div>
    </body>
</html>