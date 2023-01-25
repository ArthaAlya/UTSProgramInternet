<?php
    session_start();
    if( !isset($_SESSION["login"]) ){
        header("Location : owner_login.php");
        exit;
    }

    require 'owner_functionmenu3.php';

    //Untuk mengecek apakah tombol submit sudah ditekan atau belum
    if(isset($_POST["submit"])){
        
        //cek apakah data berhasil ditambahkan atau tidak
        if(tambah($_POST) > 0 ){
            echo "
                <script>
                    alert('Data berhasil ditambahkan!');
                    document.location.href = 'owner_editmenu3.php';
                </script>
            ";
        }
        else{
            echo "
                <script>
                    alert('Data gagal ditambahkan!');
                    document.location.href = 'owner_editmenu3.php';
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
                    <legend> <b style="color: brown;"> <i> INPUT SALAD MENU </i> </b> </legend>
                    
                    <form action="" method="post" enctype="multipart/form-data">
                        <ul>
                            <label for="name3"> Nama Menu : </label>
                            <input type="text" name="name3" id="name3" required>
                            <br/><br/><br/>

                            <label for="photo3"> Photo Menu : </label>
                            <input type="file" name="photo3" id="photo3" required>
                            <br/><br/><br/>

                            <label for="price3"> Harga Menu : </label>
                            <input type="text" name="price3" id="price3" required>
                            <br/><br/><br/>

                            <button type="submit" name="submit"> Tambah Menu </button>
                        </ul>
                    </form>
                </fieldset> <br/><br/>
            </center>
        </div>

    </body>
</html>