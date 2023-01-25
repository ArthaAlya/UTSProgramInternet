<?php
    session_start();
    if( !isset($_SESSION["login"]) ){
        header("Location : owner_login.php");
        exit;
    }

    require 'owner_functionmenu5.php';

    //Untuk mengecek apakah tombol submit sudah ditekan atau belum
    if(isset($_POST["submit"])){
        
        //cek apakah data berhasil ditambahkan atau tidak
        if(tambah($_POST) > 0 ){
            echo "
                <script>
                    alert('Data berhasil ditambahkan!');
                    document.location.href = 'owner_editmenu5.php';
                </script>
            ";
        }
        else{
            echo "
                <script>
                    alert('Data gagal ditambahkan!');
                    document.location.href = 'owner_editmenu5.php';
                </script>
            ";
        }
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

        <div class="row">
            <h2> EDIT MENU </h2>
            <center>
                <fieldset>
                    <legend> <b style="color: brown;"> <i> INPUT DESSERT MENU </i> </b> </legend>
                    
                    <form action="" method="post" enctype="multipart/form-data">
                        <ul>
                            <label for="name5"> Nama Menu : </label>
                            <input type="text" name="name5" id="name5" required>
                            <br/><br/><br/>

                            <label for="photo5"> Photo Menu : </label>
                            <input type="file" name="photo5" id="photo5" required>
                            <br/><br/><br/>

                            <label for="price5"> Harga Menu : </label>
                            <input type="text" name="price5" id="price5" required>
                            <br/><br/><br/>

                            <button type="submit" name="submit"> Tambah Menu </button>
                        </ul>
                    </form>
                </fieldset> <br/><br/>
            </center>
        </div>

    </body>
</html>