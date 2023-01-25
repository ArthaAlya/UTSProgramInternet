<?php
    session_start();
    if( !isset($_SESSION["login"]) ){
        header("Location : client_welcome.php");
        exit;
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="client_viewmenu.css" />
        <title> ORDER MENU PAGE </title> 
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
            <h2> <center> ORDER MENU </center> </h2>
            <br/><br/>

            <!-- sambungkan dengan file owner_vieworder.php -->
            <form id="form_order" name="form_order" method="post" action="client_functionorder.php">
                <center>   
                    <table border="1" class="table" cellpadding="15" cellspacing="0">
                        <tr>
                            <td> <b> Tanggal Pemesanan </b> </td>
                            <td> <input type="date" name="date" id="date"/> </td>
                        </tr>

                        <tr>
                            <td> <b> Nama Pemesan </b> </td>
                            <td> <input type="text" name="name" id="name"/> </td>
                        </tr>

                        <tr>
                            <td> <b> Nomor Meja </b> </td>
                            <td> <input type="text" name="number" id="number"/> </td>
                        </tr>
                    </table> <br/><br/>

                    <table border="1" class="table" cellpadding="15" cellspacing="0">
                        <tr>
                            <td> <b> Menu Domain </b> </td>
                            <td> <b> Nama Menu </b> </td>
                            <td> <b> Banyaknya Pesanan </b> </td>
                        </tr>

                        <!--SEAFOOD MENU-->
                        <tr>
                            <td> SEAFOOD MENU </td>
                            <td> <input type="checkbox" name="seafood[]" id="seafood[]" value="Baked Scrod"/>
                                    <label for="seafood[]"> Backed Scrod </label> </td>
                            <td> <input type="text" name="seafood[]" id="seafood[]" /> </td>
                        </tr>

                        <tr>
                            <td> SEAFOOD MENU </td>
                            <td> <input type="checkbox" name="seafood[]" id="seafood[]" value="Fish And Chips"/>
                                    <label for="seafood[]"> Fish And Chips </label> </td>
                            <td> <input type="text" name="seafood[]" id="seafood[]" /> </td>
                        </tr>

                        <tr>
                            <td> SEAFOOD MENU </td>
                            <td> <input type="checkbox" name="seafood[]" id="seafood[]" value="Grilled Lobster Tail"/>
                                    <label for="seafood[]"> Grilled Lobster Tail</label> </td>
                            <td> <input type="text" name="seafood[]" id="seafood[]" /> </td>
                        </tr>

                        <tr>
                            <td> SEAFOOD MENU </td>
                            <td> <input type="checkbox" name="seafood[]" id="seafood[]" value="Fresh Salmon"/>
                                    <label for="seafood[]"> Fresh Salmon </label> </td>
                            <td> <input type="text" name="seafood[]" id="seafood[]" /> </td>
                        </tr>

                        <tr>
                            <td> SEAFOOD MENU </td>
                            <td> <input type="checkbox" name="seafood[]" id="seafood[]" value="Grilled Oyster"/>
                                    <label for="seafood[]"> Grilled Oyster</label> </td>
                            <td> <input type="text" name="seafood[]" id="seafood[]" /> </td>
                        </tr>

                        <tr>
                            <td> SEAFOOD MENU </td>
                            <td> <input type="checkbox" name="seafood[]" id="seafood[]" value="Crab With Garlic Butter"/>
                                    <label for="seafood[]"> Crab With Garlic Butter</label> </td>
                            <td> <input type="text" name="seafood[]" id="seafood[]" /> </td>
                        </tr>

                        <!--STEAK MENU-->
                        <tr>
                            <td> STEAK MENU </td>
                            <td> <input type="checkbox" name="steak[]" id="steak[]" value="Mushroom Sirloin"/>
                                    <label for="steak[]"> Mushroom Sirloin</label> </td>
                            <td> <input type="text" name="steak[]" id="steak[]" /> </td>
                        </tr>

                        <tr>
                            <td> STEAK MENU </td>
                            <td> <input type="checkbox" name="steak[]" id="steak[]" value="Prime Rib"/>
                                    <label for="steak[]"> Prime Rib </label> </td>
                            <td> <input type="text" name="steak[]" id="steak[]" /> </td>
                        </tr>

                        <tr>
                            <td> STEAK MENU </td>
                            <td> <input type="checkbox" name="steak[]" id="steak[]" value="Royal Sirloin"/>
                                    <label for="steak[]"> Royal Sirloin</label> </td>
                            <td> <input type="text" name="steak[]" id="steak[]" /> </td>
                        </tr>

                        <tr>
                            <td> STEAK MENU </td>
                            <td> <input type="checkbox" name="steak[]" id="steak[]" value="Sliced Sirloin"/>
                                    <label for="steak[]"> Sliced Sirloin </label> </td>
                            <td> <input type="text" name="steak[]" id="steak[]" /> </td>
                        </tr>

                        <tr>
                            <td> STEAK MENU </td>
                            <td> <input type="checkbox" name="steak[]" id="steak[]" value="Smothered Tips"/>
                                    <label for="steak[]"> Smothered Tips </label> </td>
                            <td> <input type="text" name="steak[]" id="steak[]" /> </td>
                        </tr>

                        <!--SALAD MENU-->
                        <tr>
                            <td> SALAD MENU </td>
                            <td> <input type="checkbox" name="salad[]" id="salad[]" value="Caesar Salad"/>
                                    <label for="salad[]"> Caesar Salad</label> </td>
                            <td> <input type="text" name="salad[]" id="salad[]" /> </td>
                        </tr>

                        <tr>
                            <td> SALAD MENU </td>
                            <td> <input type="checkbox" name="salad[]" id="salad[]" value="Chicken Salad"/>
                                    <label for="salad[]"> Chicken Salad </label> </td>
                            <td> <input type="text" name="salad[]" id="salad[]" /> </td>
                        </tr>

                        <tr>
                            <td> SALAD MENU </td>
                            <td> <input type="checkbox" name="salad[]" id="salad[]" value="House Salad"/>
                                    <label for="salad[]"> House Salad </label> </td>
                            <td> <input type="text" name="salad[]" id="salad[]" /> </td>
                        </tr>

                        <tr>
                            <td> SALAD MENU </td>
                            <td> <input type="checkbox" name="salad[]" id="salad[]" value="Red Salad "/>
                                    <label for="salad[]"> Red Salad </label> </td>
                            <td> <input type="text" name="salad[]" id="salad[]" /> </td>
                        </tr>

                        <tr>
                            <td> SALAD MENU </td>
                            <td> <input type="checkbox" name="salad[]" id="salad[]" value="Tuna Salad"/>
                                    <label for="salad[]"> Tuna Salad </label> </td>
                            <td> <input type="text" name="salad[]" id="salad[]" /> </td>
                        </tr>

                        <!--DRINK MENU-->
                        <tr>
                            <td> DRINK MENU </td>
                            <td> <input type="checkbox" name="drink[]" id="drink[]" value="Coca Cola"/>
                                    <label for="drink[]"> Coca Cola </label> </td>
                            <td> <input type="text" name="drink[]" id="drink[]" /> </td>
                        </tr>

                        <tr>
                            <td> DRINK MENU </td>
                            <td> <input type="checkbox" name="drink[]" id="drink[]" value="Immuniser"/>
                                    <label for="drink[]"> Immuniser </label> </td>
                            <td> <input type="text" name="drink[]" id="drink[]" /> </td>
                        </tr>

                        <tr>
                            <td> DRINK MENU </td>
                            <td> <input type="checkbox" name="drink[]" id="drink[]" value="Juice"/>
                                    <label for="drink[]"> Juice </label> </td>
                            <td> <input type="text" name="drink[]" id="drink[]" /> </td>
                        </tr>

                        <tr>
                            <td> DRINK MENU </td>
                            <td> <input type="checkbox" name="drink[]" id="drink[]" value="Pepsi "/>
                                    <label for="drink[]"> Pepsi </label> </td>
                            <td> <input type="text" name="drink[]" id="drink[]" /> </td>
                        </tr>

                        <tr>
                            <td> DRINK MENU </td>
                            <td> <input type="checkbox" name="drink[]" id="drink[]" value="Smoothie"/>
                                    <label for="drink[]"> Smoothie </label> </td>
                            <td> <input type="text" name="drink[]" id="drink[]" /> </td>
                        </tr>

                        <!--DESSERT MENU-->
                        <tr>
                            <td> DESSERT MENU </td>
                            <td> <input type="checkbox" name="dessert[]" id="dessert[]" value="Daifuku"/>
                                    <label for="dessert[]"> Daifuku </label> </td>
                            <td> <input type="text" name="dessert[]" id="dessert[]" /> </td>
                        </tr>

                        <tr>
                            <td> DESSERT MENU </td>
                            <td> <input type="checkbox" name="dessert[]" id="dessert[]" value="Fudge Cake"/>
                                    <label for="dessert[]"> Fudge Cake </label> </td>
                            <td> <input type="text" name="dessert[]" id="dessert[]" /> </td>
                        </tr>

                        <tr>
                            <td> DESSERT MENU </td>
                            <td> <input type="checkbox" name="dessert[]" id="dessert[]" value="Petite Treat"/>
                                    <label for="dessert[]"> Petite Treat </label> </td>
                            <td> <input type="text" name="dessert[]" id="dessert[]" /> </td>
                        </tr>

                        <tr>
                            <td> DESSERT MENU </td>
                            <td> <input type="checkbox" name="dessert[]" id="dessert[]" value="Fudge Sundae "/>
                                    <label for="dessert[]"> Fudge Sundae </label> </td>
                            <td> <input type="text" name="dessert[]" id="dessert[]" /> </td>
                        </tr>

                        <tr>
                            <td> DESSERT MENU </td>
                            <td> <input type="checkbox" name="dessert[]" id="dessert[]" value="Sterusel Pie"/>
                                <label for="dessert[]"> Sterusel Pie </label> </td>
                            <td> <input type="text" name="dessert[]" id="dessert[]" /> </td>
                        </tr>

                    </table> <br/><br/>

                    <input type="submit" name="BtnKirim" id="BtnKirim" value="Order" />
                </center>
            </form>
        </div>
    </body>
</html>