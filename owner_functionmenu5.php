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
        $query = "SELECT * FROM dessert WHERE name5 LIKE '%$keyword%' OR price5 LIKE '%$keyword%'";
        return query($query);
    }

    function tambah($data){
        global $conn;

        //Mengecek atau mengamankan data yaitu dengan menambahkan fungsi htmlspecialchars
        //Ambil data dari tiap elemen dari setiap form
        $name5 = htmlspecialchars($data["name5"]);

        //Memasukkan fungsi upload gambar
        $photo5 = upload();
        if( !$photo5 ){
            return false;
        }

        $price5 = htmlspecialchars($data["price5"]);

        //query insert data
        $query = "INSERT INTO dessert VALUES ('', '$name5', '$photo5', '$price5')";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    function upload(){
        $namaFile = $_FILES['photo5']['name'];
        $ukuranFile = $_FILES['photo5']['size'];
        $error = $_FILES['photo5']['error'];
        $tmpName = $_FILES['photo5']['tmp_name'];

        //Cek apakah ada gambar yang di upload
        if( $error === 5 ){
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
        mysqli_query($conn, "DELETE FROM dessert WHERE id = $id");

        return mysqli_affected_rows($conn);
    }

    function ubah($data){
        global $conn;

        $id = $data["id"];
        //Mengecek atau mengamankan data yaitu dengan menambahkan fungsi htmlspecialchars
        //Ambil data dari tiap elemen dari setiap form
        $name5 = htmlspecialchars($data["name5"]);

        $oldPhoto5 = htmlspecialchars($data["oldPhoto5"]);
        //Cek apakah user pilih gambar baru atau tidak
        if( $_FILES['photo5'] === 5){
            $photo5 = $oldPhoto5;
        }
        else{
            $photo5 = upload();
        }     

        $price5 = htmlspecialchars($data["price5"]);

        //query insert data
        $query = "UPDATE dessert SET
            name5 = '$name5',
            photo5 = '$photo5',
            price5 = '$price5' WHERE id = $id";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }
?>