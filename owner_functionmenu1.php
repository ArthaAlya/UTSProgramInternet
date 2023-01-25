<?php
    //Koneksi ke database
    $conn = mysqli_connect("localhost","root","","menu");

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

    function cari($keyword){
        $query = "SELECT * FROM seafood WHERE name1 LIKE '%$keyword%' OR price1 LIKE '%$keyword%'";
        return query($query);
    }

    function tambah($data){
        global $conn;

        //Mengecek atau mengamankan data yaitu dengan menambahkan fungsi htmlspecialchars
        //Ambil data dari tiap elemen dari setiap form
        $name1 = htmlspecialchars($data["name1"]);

        //Memasukkan fungsi upload gambar
        $photo1 = upload();
        if( !$photo1 ){
            return false;
        }

        $price1 = htmlspecialchars($data["price1"]);

        //query insert data
        $query = "INSERT INTO seafood VALUES ('', '$name1', '$photo1', '$price1')";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    function upload(){
        $namaFile = $_FILES['photo1']['name'];
        $ukuranFile = $_FILES['photo1']['size'];
        $error = $_FILES['photo1']['error'];
        $tmpName = $_FILES['photo1']['tmp_name'];

        //Cek apakah ada gambar yang di upload
        if( $error === 4 ){
            echo "<script> alert('Pilih gambar terlebih dahulu!'); </script>";
            return false;
        }

        //Cek apakah yang diupload merupakan gambar
        $ekstensiGambarValid = ['jpg', 'png', 'jpeg'];
        $ekstensiGambar = explode('.', $namaFile);
        $ekstensiGambar = strtolower(end($ekstensiGambar));

        if( !in_array($ekstensiGambar, $ekstensiGambarValid) ){
            echo "<script> alert('File yang Anda upload bukan termasuk file gambar!'); </script>";
            return false;
        }

        //Cek ukuran gambar = Membatasi ukuran gambar (2000000)
        if( $ukuranFile > 2000000 ){
            echo "<script> alert('Ukuran file gambar yang Anda pilih terlalu besar!'); </script>";
            return false;
        }

        //Lolos = Masuk direktori
        //generate nama baru
        $namaFileBaru = uniqid();
        $namaFileBaru .= '.';
        $namaFileBaru .= $ekstensiGambar;

        move_uploaded_file($tmpName, 'img/'.$namaFileBaru);
        return $namaFileBaru;

    }

    function hapus($id){
        global $conn;
        mysqli_query($conn, "DELETE FROM seafood WHERE id = $id");

        return mysqli_affected_rows($conn);
    }

    function ubah($data){
        global $conn;

        $id = $data["id"];
        //Mengecek atau mengamankan data yaitu dengan menambahkan fungsi htmlspecialchars
        //Ambil data dari tiap elemen dari setiap form
        $name1 = htmlspecialchars($data["name1"]);

        $oldPhoto1 = htmlspecialchars($data["oldPhoto1"]);
        //Cek apakah user pilih gambar baru atau tidak
        if( $_FILES['photo1'] === 4){
            $photo1 = $oldPhoto1;
        }
        else{
            $photo1 = upload();
        }     

        $price1 = htmlspecialchars($data["price1"]);

        //query insert data
        $query = "UPDATE seafood SET
            name1 = '$name1',
            photo1 = '$photo1',
            price1 = '$price1' WHERE id = $id";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }
?>