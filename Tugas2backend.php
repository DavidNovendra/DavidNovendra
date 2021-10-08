<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Array</title>
</head>
<body>
    <?php
    $hari = ["Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu", "Minggu"];
    $bulan = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", 
            "Juli", "Agustus", "September", "Oktober", "November", "Desember"];

    $jumlah = count($bulan);

    $hasil = $jumlah * 21;
 
    echo '<h1>Tugas 2 ClassBackend</h1>';
    echo '<h3>Daftar Hari :</h3>';
    print_r($hari);

    echo '<br><br>';
    echo '<h3>Daftar Bulan :</h3>';
    print_r($bulan);

    echo '<br><br>';
    echo '<h3>Jumlah Bulan :</h3>';
    echo $jumlah;
    echo '<br><br>';    

    echo '<h3>Hasil Jumlah Bulan * Umur :</h3>';
if ($hasil %2 == 0) :
    echo $hasil ."  merupakan angka genap";
else:
        echo $hasil ."  merupakan angka ganjil";
    endif; 
    ?>
</body>
</html> 