<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 3 BE-Himsi</title>
</head>

<body>
    <h1>Nilai Ujian</h1>
    <?php
    $nilai = [100, 80, 50, 10, 10, 70, 65, 48, 50, 80, 90, 100, 30, 40, 20];
    $konversi = 0;
    function isLulus($predikat)
    {
        if ($predikat == 'A') :
            echo "  Lulus <br>";
        elseif ($predikat == 'B') :
            echo "  Lulus <br>";
        elseif ($predikat == 'C') :
            echo "  Lulus <br>";
        else :
            echo "  Tidak Lulus <br>";
        endif;
    }
    for ($i = 0; $i < count($nilai); $i++) :
        $konversi += ($nilai[$i] * 4) / (count($nilai) * 100);

        echo "Nilai ujian ke-" . ($i + 1) . " = " . $nilai[$i];

        if ($nilai[$i] >= 80 && $nilai[$i] <= 100) :
            $predikat = "A";
            echo isLulus($predikat);

        elseif ($nilai[$i] >= 70 && $nilai[$i] <= 79) :
            $predikat = "B";
            echo isLulus($predikat);

        elseif ($nilai[$i] >= 60 && $nilai[$i] <= 69) :
            $predikat = "C";
            echo isLulus($predikat);

        elseif ($nilai[$i] >= 50 && $nilai[$i] <= 59) :
            $predikat = "D";
            echo isLulus($predikat);
        else :
            $predikat = "E";
            echo isLulus($predikat);
        endif;
    endfor;
    echo "<br>";
    echo "Nilai konversi = " . $konversi;

    ?>
</body>

</html>