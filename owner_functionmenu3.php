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
        $query = "SELECT * FROM salad WHERE name3 LIKE '%$keyword%' OR price3 LIKE '%$keyword%'";
        return query($query);
    }

    function tambah($data){
        global $conn;

        //Mengecek atau mengamankan data yaitu dengan menambahkan fungsi htmlspecialchars
        //Ambil data dari tiap elemen dari setiap form
        $name3 = htmlspecialchars($data["name3"]);

        //Memasukkan fungsi upload gambar
        $photo3 = upload();
        if( !$photo3 ){
            return false;
        }

        $price3 = htmlspecialchars($data["price3"]);

        //query insert data
        $query = "INSERT INTO salad VALUES ('', '$name3', '$photo3', '$price3')";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    function upload(){
        $namaFile = $_FILES['photo3']['name'];
        $ukuranFile = $_FILES['photo3']['size'];
        $error = $_FILES['photo3']['error'];
        $tmpName = $_FILES['photo3']['tmp_name'];

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
        mysqli_query($conn, "DELETE FROM salad WHERE id = $id");

        return mysqli_affected_rows($conn);
    }

    function ubah($data){
        global $conn;

        $id = $data["id"];
        //Mengecek atau mengamankan data yaitu dengan menambahkan fungsi htmlspecialchars
        //Ambil data dari tiap elemen dari setiap form
        $name3 = htmlspecialchars($data["name3"]);

        $oldPhoto3 = htmlspecialchars($data["oldPhoto3"]);
        //Cek apakah user pilih gambar baru atau tidak
        if( $_FILES['photo3'] === 4){
            $photo3 = $oldPhoto3;
        }
        else{
            $photo3 = upload();
        }     

        $price3 = htmlspecialchars($data["price3"]);

        //query insert data
        $query = "UPDATE salad SET
            name3 = '$name3',
            photo3 = '$photo3',
            price3 = '$price3' WHERE id = $id";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }
?>