<?php
    session_start();
    if( !isset($_SESSION["login"]) ){
        header("Location : owner_login.php");
        exit;
    }

    require 'owner_functionmenu4.php';
    
    $id = $_GET["id"];
    
    if(hapus($id) > 0){
        echo "
                <script>
                    alert('Data berhasil dihapus!');
                    document.location.href = 'owner_editmenu4.php';
                </script>
            ";
    }
    else{
        echo "
            <script>
                alert('Data gagal dihapus!');
                document.location.href = 'owner_editmenu4.php';
            </script>
        ";
    }
?>