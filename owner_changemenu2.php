<?php
    session_start();
    if( !isset($_SESSION["login"]) ){
        header("Location : owner_login.php");
        exit;
    }

    require 'owner_functionmenu2.php';

    //Ambil data di URL
    $id = $_GET["id"];

    //query data mahasiswa berdasarkan id
    $menu_steak = query("SELECT * FROM steak WHERE id = $id")[0];

    //Untuk mengecek apakah tombol submit sudah ditekan atau belum
    if(isset($_POST["submit"])){
        
        //cek apakah data berhasil diubah atau tidak
        if(ubah($_POST) > 0 ){
            echo "
                <script>
                    alert('Data berhasil diubah!');
                    document.location.href = 'owner_editmenu2.php';
                </script>
            ";
        }
        else{
            echo "
                <script>
                    alert('Data gagal diubah!');
                    document.location.href = 'owner_editmenu2.php';
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
                    <legend> <b style="color: brown;"> <i> CHANGE STEAK MENU </i> </b> </legend>
                    
                    <form action="" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?= $menu_steak["id"]; ?>">
                        <input type="hidden" name="oldPhoto2" value="<?= $menu_steak["photo2"]; ?>">
                        <ul>
                            <label for="name2"> Nama Menu : </label>
                            <input type="text" name="name2" id="name2" value="<?= $menu_steak["name2"]; ?>">
                            <br/><br/><br/>

                            <label for="photo2"> Photo Menu : </label> <br/>
                            <img src="img/<?= $menu_steak['photo2']; ?>" width="150" height="100"> <br>
                            <input type="file" name="photo2" id="photo2">
                            <br/><br/><br/>

                            <label for="price2"> Harga Menu : </label>
                            <input type="text" name="price2" id="price2" value="<?= $menu_steak["price2"]; ?>">
                            <br/><br/><br/>

                            <button type="submit" name="submit"> Ubah Menu </button>
                        </ul>
                    </form>
                </fieldset> <br/><br/>
            </center>
        </div>

    </body>
</html>