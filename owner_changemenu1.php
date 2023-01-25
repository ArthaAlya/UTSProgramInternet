<?php
    session_start();
    if( !isset($_SESSION["login"]) ){
        header("Location : owner_login.php");
        exit;
    }

    require 'owner_functionmenu1.php';

    //Ambil data di URL
    $id = $_GET["id"];

    //query data mahasiswa berdasarkan id
    $menu_seafood = query("SELECT * FROM seafood WHERE id = $id")[0];

    //Untuk mengecek apakah tombol submit sudah ditekan atau belum
    if(isset($_POST["submit"])){
        
        //cek apakah data berhasil diubah atau tidak
        if(ubah($_POST) > 0 ){
            echo "
                <script>
                    alert('Data berhasil diubah!');
                    document.location.href = 'owner_editmenu1.php';
                </script>
            ";
        }
        else{
            echo "
                <script>
                    alert('Data gagal diubah!');
                    document.location.href = 'owner_editmenu1.php';
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
                    <legend> <b style="color: brown;"> <i> CHANGE SEAFOODS MENU </i> </b> </legend>
                    
                    <form action="" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?= $menu_seafood["id"]; ?>">
                        <input type="hidden" name="oldPhoto1" value="<?= $menu_seafood["photo1"]; ?>">
                        <ul>
                            <label for="name1"> Nama Menu : </label>
                            <input type="text" name="name1" id="name1" value="<?= $menu_seafood["name1"]; ?>">
                            <br/><br/><br/>

                            <label for="photo1"> Photo Menu : </label> <br/>
                            <img src="img/<?= $menu_seafood['photo1']; ?>" width="150" height="100"> <br>
                            <input type="file" name="photo1" id="photo1">
                            <br/><br/><br/>

                            <label for="price1"> Harga Menu : </label>
                            <input type="text" name="price1" id="price1" value="<?= $menu_seafood["price1"]; ?>">
                            <br/><br/><br/>

                            <button type="submit" name="submit"> Ubah Menu </button>
                        </ul>
                    </form>
                </fieldset> <br/><br/>
            </center>
        </div>

    </body>
</html>