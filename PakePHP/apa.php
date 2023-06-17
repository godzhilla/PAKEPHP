<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    // LAT 1
    $nama = "Ashila Najla Salsabillaa";
    $panjangNama = strlen($nama);
    if($panjangNama == (date('d')-2)){
        echo "Berhasil";
    } elseif ($panjangNama < (date('d')-2)){
        echo "Sedikit Lagi";
    } else {
        echo "Coba Lagi";
    }



    // LAT 2
    $anggota = array("MarkLee" => "493981", "Minhyung" => "493982", "Lee" => "2076767");
    foreach($anggota as $nama => $nim) {
        if($nim % 2 == 0){
            echo "Nama : " . $nama . "<br>";
            echo "NIM : " . $nim . "<br>";
            echo "Bagian : Back-End Developer" . "<br><br>";
        } else {
            echo "Nama : " . $nama . "<br>";
            echo "NIM : " . $nim . "<br>";
            echo "Bagian : Front-End Developer" . "<br><br>";
        }
    }


    //LAT 3
    $nama = "Marklee";
    $kota = array("Lampung", "Riau", "Jambi", "Bengkulu", "Makassar", "Kendari", "Gorontalo", "Samarinda", "Papua", "Nusa Tenggara Barat");
    $array = array();
    for ($x = 0; $x < strlen($nama); $x++){
        $carikota = strtolower($nama[$x]);
        for($y = 0; $y < count($kota); $y++){
            $kotasekarang = strtolower($kota[$y]);
            if ($carikota == $kotasekarang[0]){
                array_push($array, $kota[$y]);
            }
        }
    }
    if(count($array)==0){
        print_r("Anda akan ditempatkan di Jawa Timur");
    } else {
        print_r("Anda akan ditempatkan di ".$array[0]);
    }
?>
</body>
</html>