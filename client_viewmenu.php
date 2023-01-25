<?php
    session_start();
    if( !isset($_SESSION["login"]) ){
        header("Location : client_welcome.php");
        exit;
    }

    require 'client_functionmenu.php';

    $seafood = query("SELECT * FROM seafood");
    $steak = query("SELECT * FROM steak");
    $salad = query("SELECT * FROM salad");
    $drink = query("SELECT * FROM drink");
    $dessert = query("SELECT * FROM dessert");
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="client_viewmenu.css" />
        <title> MENU PAGE </title> 
    </head>

    <body>
        <div class="header">
            <h1> PURPLE RESTAURANT </h1>
        </div>

        <div class="topnav">
            <!-- sambungkan href ke file client_viewmenu.php -->
            <a href="client_viewmenu.php"> View Menu </a>
            <!-- sambungkan href ke file client_ordermenu.php -->
            <a href="client_ordermenu.php"> Order Menu </a>
            <!-- sambungkan href ke file client_logout.php -->
            <a href="client_logout.php" style="float:right"> Exit </a>
            <!-- sambungkan href ke file owner_login.php -->
            <a href="owner_login.php" style="float:right"> Login Pegawai </a>
        </div>

        <div class="row">
            <h2> LIST OF MENU </h2>

            <center>
                <fieldset>
                    <legend> <b style="color: brown;"> <i> SEAFOODS MENU </i> </b> </legend> <br/>

                    <table border="1" class="table" cellpadding="15" cellspacing="0">
                        <tr>
                            <th> Name </th>
                            <th> Photo </th>
                            <th> Price </th>
                        </tr>

                        <?php
                            foreach($seafood as $menu1):
                        ?>
                        <tr>
                            <td> <?= $menu1["name1"]?> </td>
                            <td> <img src="img/<?= $menu1["photo1"]?>" width="150" height="100"> </td>
                            <td> <?= $menu1["price1"]?> </td>
                        </tr>
                        <?php 
                            endforeach;
                        ?>
                    </table>
                </fieldset> <br/><br/>

                <fieldset>
                    <legend> <b style="color: brown;"> <i> STEAKS MENU </i> </b> </legend> <br/>

                    <table border="1" class="table" cellpadding="15" cellspacing="0">
                        <tr>
                            <th> Name </th>
                            <th> Photo </th>
                            <th> Price </th>
                        </tr>

                        <?php
                            foreach($steak as $menu2):
                        ?>
                        <tr>
                            <td> <?= $menu2["name2"]?> </td>
                            <td> <img src="img/<?= $menu2["photo2"]?>" width="150" height="100"> </td>
                            <td> <?= $menu2["price2"]?> </td>
                        </tr>
                        <?php 
                            endforeach;
                        ?>
                    </table>
                </fieldset> <br/><br/>

                <fieldset>
                    <legend> <b style="color: brown;"> <i> SALADS MENU </i> </b> </legend> <br/>

                    <table border="1" class="table" cellpadding="15" cellspacing="0">
                        <tr>
                            <th> Name </th>
                            <th> Photo </th>
                            <th> Price </th>
                        </tr>

                        <?php
                            foreach($salad as $menu3):
                        ?>
                        <tr>
                            <td> <?= $menu3["name3"]?> </td>
                            <td> <img src="img/<?= $menu3["photo3"]?>" width="150" height="100"> </td>
                            <td> <?= $menu3["price3"]?> </td>
                        </tr>
                        <?php 
                            endforeach;
                        ?>
                    </table>
                </fieldset> <br/><br/>

                <fieldset>
                    <legend> <b style="color: brown;"> <i> DRINKS MENU </i> </b> </legend> <br/>

                    <table border="1" class="table" cellpadding="15" cellspacing="0">
                        <tr>
                            <th> Name </th>
                            <th> Photo </th>
                            <th> Price </th>
                        </tr>

                        <?php
                            foreach($drink as $menu4):
                        ?>
                        <tr>
                            <td> <?= $menu4["name4"]?> </td>
                            <td> <img src="img/<?= $menu4["photo4"]?>" width="150" height="100"> </td>
                            <td> <?= $menu4["price4"]?> </td>
                        </tr>
                        <?php 
                            endforeach;
                        ?>
                    </table>
                </fieldset> <br/><br/>

                <fieldset>
                    <legend> <b style="color: brown;"> <i> DESSERTS MENU </i> </b> </legend> <br/>
                    
                    <table border="1" class="table" cellpadding="15" cellspacing="0">
                        <tr>
                            <th> Name </th>
                            <th> Photo </th>
                            <th> Price </th>
                        </tr>

                        <?php
                            foreach($dessert as $menu5):
                        ?>
                        <tr>
                            <td> <?= $menu5["name5"]?> </td>
                            <td> <img src="img/<?= $menu5["photo5"]?>" width="150" height="100"> </td>
                            <td> <?= $menu5["price5"]?> </td>
                        </tr>
                        <?php 
                            endforeach;
                        ?>
                    </table>
                </fieldset> <br/><br/>
            </center>
        </div>

    </body>
</html>