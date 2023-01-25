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
        $query = "SELECT * FROM steak WHERE name2 LIKE '%$keyword%' OR price2 LIKE '%$keyword%'";
        return query($query);
    }

    function tambah($data){
        global $conn;

        //Mengecek atau mengamankan data yaitu dengan menambahkan fungsi htmlspecialchars
        //Ambil data dari tiap elemen dari setiap form
        $name2 = htmlspecialchars($data["name2"]);

        //Memasukkan fungsi upload gambar
        $photo2 = upload();
        if( !$photo2 ){
            return false;
        }

        $price2 = htmlspecialchars($data["price2"]);

        //query insert data
        $query = "INSERT INTO steak VALUES ('', '$name2', '$photo2', '$price2')";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    function upload(){
        $namaFile = $_FILES['photo2']['name'];
        $ukuranFile = $_FILES['photo2']['size'];
        $error = $_FILES['photo2']['error'];
        $tmpName = $_FILES['photo2']['tmp_name'];

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

        move_uploaded_file($tmpName, 'img/' . $namaFileBaru);
        return $namaFileBaru;

    }

    function hapus($id){
        global $conn;
        mysqli_query($conn, "DELETE FROM steak WHERE id = $id");

        return mysqli_affected_rows($conn);
    }

    function ubah($data){
        global $conn;

        $id = $data["id"];
        //Mengecek atau mengamankan data yaitu dengan menambahkan fungsi htmlspecialchars
        //Ambil data dari tiap elemen dari setiap form
        $name2 = htmlspecialchars($data["name2"]);

        $oldPhoto2 = htmlspecialchars($data["oldPhoto2"]);
        //Cek apakah user pilih gambar baru atau tidak
        if( $_FILES['photo2'] === 4){
            $photo2 = $oldPhoto2;
        }
        else{
            $photo2 = upload();
        }     

        $price2 = htmlspecialchars($data["price2"]);

        //query insert data
        $query = "UPDATE steak SET
            name2 = '$name2',
            photo2 = '$photo2',
            price2 = '$price2' WHERE id = $id";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }
?>