<?php
    session_start();
    if( !isset($_SESSION["login"]) ){
        header("Location : owner_login.php");
        exit;
    }

    require 'owner_functionmenu1.php';

    $seafood = query("SELECT * FROM seafood");

    //jika tombol cari di klik
    if(isset($_POST["cari"])){
        $seafood = cari($_POST["keyword"]);
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
                    <legend> <b style="color: brown;"> <i> SEAFOODS MENU </i> </b> </legend>
                    <!-- sambungkan href ke file owner_inputmenu1.php-->
                    <a href="owner_inputmenu1.php" style="float: left;"> + Input new menu </a> <br/><br/>

                    <table border="1" class="table" cellpadding="15" cellspacing="0">
                        <tr>
                            <th> Name </th>
                            <th> Photo </th>
                            <th> Price </th>
                            <th> Option </th>
                        </tr>

                        <?php
                            foreach($seafood as $menu1):
                        ?>
                        <tr>
                            <td> <?= $menu1["name1"]?> </td>
                            <td> <img src="img/<?= $menu1["photo1"]?>" width="150" height="100"> </td>
                            <td> <?= $menu1["price1"]?> </td>
                            <td>
                                <!-- Isi link href dengan owner_changemenu1.php --> 
                                <a href="owner_changemenu1.php?id=<?= $menu1["id"]?>"> Change </a> |
                                <!-- Isi link href dengan owner_deletemenu1.php --> 
                                <a href="owner_deletemenu1.php?id=<?= $menu1["id"]?>"
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