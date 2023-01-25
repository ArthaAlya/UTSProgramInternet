<?php
    session_start();
    if( !isset($_SESSION["login"]) ){
        header("Location : owner_login.php");
        exit;
    }

    require 'owner_functionmenu3.php';

    //Ambil data di URL
    $id = $_GET["id"];

    //query data mahasiswa berdasarkan id
    $menu_salad = query("SELECT * FROM salad WHERE id = $id")[0];

    //Untuk mengecek apakah tombol submit sudah ditekan atau belum
    if(isset($_POST["submit"])){
        
        //cek apakah data berhasil diubah atau tidak
        if(ubah($_POST) > 0 ){
            echo "
                <script>
                    alert('Data berhasil diubah!');
                    document.location.href = 'owner_editmenu3.php';
                </script>
            ";
        }
        else{
            echo "
                <script>
                    alert('Data gagal diubah!');
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
                    <legend> <b style="color: brown;"> <i> CHANGE SALAD MENU </i> </b> </legend>
                    
                    <form action="" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?= $menu_salad["id"]; ?>">
                        <input type="hidden" name="oldPhoto3" value="<?= $menu_salad["photo3"]; ?>">
                        <ul>
                            <label for="name3"> Nama Menu : </label>
                            <input type="text" name="name3" id="name3" value="<?= $menu_salad["name3"]; ?>">
                            <br/><br/><br/>

                            <label for="photo3"> Photo Menu : </label> <br/>
                            <img src="img/<?= $menu_salad['photo3']; ?>" width="150" height="100"> <br>
                            <input type="file" name="photo3" id="photo3">
                            <br/><br/><br/>

                            <label for="price3"> Harga Menu : </label>
                            <input type="text" name="price3" id="price3" value="<?= $menu_salad["price3"]; ?>">
                            <br/><br/><br/>

                            <button type="submit" name="submit"> Ubah Menu </button>
                        </ul>
                    </form>
                </fieldset> <br/><br/>
            </center>
        </div>

    </body>
</html>