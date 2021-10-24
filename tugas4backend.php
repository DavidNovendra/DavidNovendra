<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 3 BE-Himsi</title>
</head>

<body>
    <?php
    function perhitunganSederhana($angkatan, $semester)
    {
        $kali = $angkatan * $semester;
        if ($kali % 3 == 0) {
            return " Habis dibagi tiga";
        } else {
            return " Tidak habis dibagi tiga";
        }
    }

    $angkatan = 2018;
    $semester = 7;

    echo "$angkatan <br>";
    echo "$semester <br>";
    echo "Angkatan x Semester = ";
    echo perhitunganSederhana($angkatan, $semester)
    ?>
</body>

</html>