<?php
    //var inputan
    $angkapertama=$_POST["inputan1"];
    $angkakedua=$_POST["inputan2"];
    //variabel operasi
    $tombol=$_POST["tombol"];
    // $pembagian=$_POST["pembagian"];
    // $pertambahan=$_POST["pertambahan"];
    // $pengurangan=$_POST["pengurangan"];

    if ($tombol=="x") {
        $perkalian=$angkapertama*$angkakedua;
        echo "Hasil Perkalian".$angkapertama." x ".$angkakedua."=".$perkalian."<br>";
    }else if($tombol=="/"){
        $pembagian=$angkapertama/$angkakedua;
        echo "Hasil Pembagian".$angkapertama." / ".$angkakedua."=".$pembagian."<br>";
    }else if($tombol=="+"){
        $pertambahan=$angkapertama+$angkakedua;
        echo "Hasil Pertambahan".$angkapertama." + ".$angkakedua."=".$pertambahan."<br>";
    }else if($tombol=="-"){
        $pengurangan=$angkapertama-$angkakedua;
        echo "Hasil Pengurangan".$angkapertama." - ".$angkakedua."=".$pengurangan."<br>";
    }
    

    // $pembagian=$angkapertama/$angkakedua;
    //     echo $pembagian."<br>";
    //     if($pembagian==2){
    //         echo "Hasil BENAR"."<br>";
    //     }
    // $pertambahan=$angkapertama+$angkakedua;
    //     echo $pertambahan."<br>";
    //     if($pertambahan==30){
    //         echo "Hasil BENAR"."<br>";
    //     }
    // $pengurangan=$angkapertama-$angkakedua;
    //     echo $pengurangan."<br>";
    //     if($pengurangan==10){
    //         echo "Hasil BENAR"."<br>";
    //     }
?>