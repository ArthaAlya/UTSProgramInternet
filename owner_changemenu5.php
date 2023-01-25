<?php
    session_start();
    if( !isset($_SESSION["login"]) ){
        header("Location : owner_login.php");
        exit;
    }

    require 'owner_functionmenu5.php';

    //Ambil data di URL
    $id = $_GET["id"];

    //query data mahasiswa berdasarkan id
    $menu_dessert = query("SELECT * FROM dessert WHERE id = $id")[0];

    //Untuk mengecek apakah tombol submit sudah ditekan atau belum
    if(isset($_POST["submit"])){
        
        //cek apakah data berhasil diubah atau tidak
        if(ubah($_POST) > 0 ){
            echo "
                <script>
                    alert('Data berhasil diubah!');
                    document.location.href = 'owner_editmenu5.php';
                </script>
            ";
        }
        else{
            echo "
                <script>
                    alert('Data gagal diubah!');
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
                    <legend> <b style="color: brown;"> <i> CHANGE DESSERT MENU </i> </b> </legend>
                    
                    <form action="" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?= $menu_dessert["id"]; ?>">
                        <input type="hidden" name="oldPhoto5" value="<?= $menu_dessert["photo5"]; ?>">
                        <ul>
                            <label for="name5"> Nama Menu : </label>
                            <input type="text" name="name5" id="name5" value="<?= $menu_dessert["name5"]; ?>">
                            <br/><br/><br/>

                            <label for="photo5"> Photo Menu : </label> <br/>
                            <img src="img/<?= $menu_dessert['photo5']; ?>" width="150" height="100"> <br>
                            <input type="file" name="photo5" id="photo5">
                            <br/><br/><br/>

                            <label for="price5"> Harga Menu : </label>
                            <input type="text" name="price5" id="price5" value="<?= $menu_dessert["price5"]; ?>">
                            <br/><br/><br/>

                            <button type="submit" name="submit"> Ubah Menu </button>
                        </ul>
                    </form>
                </fieldset> <br/><br/>
            </center>
        </div>

    </body>
</html>