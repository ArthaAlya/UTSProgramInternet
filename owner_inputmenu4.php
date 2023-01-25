<?php
    session_start();
    if( !isset($_SESSION["login"]) ){
        header("Location : owner_login.php");
        exit;
    }

    require 'owner_functionmenu4.php';

    //Untuk mengecek apakah tombol submit sudah ditekan atau belum
    if(isset($_POST["submit"])){
        
        //cek apakah data berhasil ditambahkan atau tidak
        if(tambah($_POST) > 0 ){
            echo "
                <script>
                    alert('Data berhasil ditambahkan!');
                    document.location.href = 'owner_editmenu4.php';
                </script>
            ";
        }
        else{
            echo "
                <script>
                    alert('Data gagal ditambahkan!');
                    document.location.href = 'owner_editmenu4.php';
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
                    <legend> <b style="color: brown;"> <i> INPUT DRINK MENU </i> </b> </legend>
                    
                    <form action="" method="post" enctype="multipart/form-data">
                        <ul>
                            <label for="name4"> Nama Menu : </label>
                            <input type="text" name="name4" id="name4" required>
                            <br/><br/><br/>

                            <label for="photo4"> Photo Menu : </label>
                            <input type="file" name="photo4" id="photo4" required>
                            <br/><br/><br/>

                            <label for="price4"> Harga Menu : </label>
                            <input type="text" name="price4" id="price4" required>
                            <br/><br/><br/>

                            <button type="submit" name="submit"> Tambah Menu </button>
                        </ul>
                    </form>
                </fieldset> <br/><br/>
            </center>
        </div>

    </body>
</html>