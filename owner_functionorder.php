<?php
    //Koneksi ke database
    $conn = mysqli_connect("localhost","root","","owner");

    function query($query){
        //Agar variabel $conn dalam fungsi ini mengarah pada $conn yang ada pada koneksi database
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];
        while($row = mysqli_fetch_assoc($result)){
            //Menambahkan elemen baru di setiap array
            $rows[] = $row;
        }
        return $rows;
    }

    function registrasi($data){
        global $conn;

        $username = stripslashes($data["username"]);
        $password = mysqli_real_escape_string($conn, $data["password"]);

        //cek username apakah sudah digunakan atau belum
        $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username' ");
        if(mysqli_fetch_assoc($result)){
            echo "<script> alert('Username yang hendak ditambahkan sudah ada! Silahkan pilih username lain'); </script>";
            return false;
        }

        //enkripsi password
        $password = md5($password);

        //tambahkan data ke database
        mysqli_query($conn, "INSERT INTO user VALUES ('', '$username', '$password')");
        
        return mysqli_affected_rows($conn);
    }
?>