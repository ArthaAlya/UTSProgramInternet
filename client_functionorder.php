<?php
    //Koneksi ke database
    $conn = mysqli_connect("localhost","root","","owner");

    if('$_POST[save]'){
        $date = $_POST['date'];
        $name = $_POST['name'];
        $number = $_POST['number'];
        $seafood_array = $_POST['seafood'];
        $steak_array = $_POST['steak'];
        $salad_array = $_POST['salad'];
        $drink_array = $_POST['drink'];
        $dessert_array = $_POST['dessert'];

        foreach($seafood_array as $menu1){
            $source1 .= $menu1. ",";
        }
        $seafood = substr($source1,0,-1);

        foreach($steak_array as $menu2){
            $source2 .= $menu2. ",";
        }
        $steak = substr($source2,0,-1);

        foreach($salad_array as $menu3){
            $source3 .= $menu3. ",";
        }
        $salad = substr($source3,0,-1);

        foreach($drink_array as $menu4){
            $source4 .= $menu4. ",";
        }
        $drink = substr($source4,0,-1);

        foreach($dessert_array as $menu5){
            $source .= $menu5. ",";
        }
        $dessert = substr($source,0,-1);

        if(!empty ($date) and !empty($name)){
            $query="INSERT INTO form_order (id, date, name, number, seafood, steak, salad, drink, dessert, status)
                VALUES ('','$date','$name','$number','$seafood', '$steak', '$salad', '$drink', '$dessert', '')";
            $hasil=mysqli_query($conn, $query);
            if($hasil){
                echo "<script> alert('Data Berhasil disimpan');location.href='client_ordermenu.php';</script>";}
            }
        }
        else{echo "<script> alert('Data Gagal disimpan');location.href='client_ordermenu.php';</script>";}
?>