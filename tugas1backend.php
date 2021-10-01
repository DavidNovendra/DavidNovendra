<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata Diri</title>
</head>
<body>
    
<?php
    //variabel
        $namaDepan = "David";
        $namaBelakang = "Nopendra";
        $tempatLahir = "Jakarta, ";
        $tanggalLahir = "21"; 
        $bulanLahir = "November"; 
        $tahunLahir = "1999";
        $alamat = "Gg.Langgar No.26"; 
        $kelurahan = "Kebagusan"; 
        $kecamatan = "PasarMinggu";
        $kota = "Jakarta Selatan";
        $kodepos = "15120";

        $smenikah = false;
        
        $kabisat = ($tahunLahir % 4 == 0);
        
        $targetIPK = "3.90";
    ?>
<h3>Biodata</h3>
<p>
    Nama Lengkap :
    <?php echo $namaDepan ." " .$namaBelakang
    ?>
</p>
<p>
    Tempat, Tanggal Lahir :
    <?php echo $tempatLahir ." " .$tanggalLahir ." " .$bulanLahir ." " .$tahunLahir
    ?>
</p>
<p>
    Alamat :
    <?php echo $alamat ." " .$kelurahan ." " .$kecamatan ." " .$kota ." " .$kodepos
    ?>
</p>
<p>
    Sudah Menikah?
    <?php var_export($smenikah)
    ?>
</p>
<p>
    Tahun lahir kabisat?
    <?php var_export($kabisat)
    ?>
</p>
<p>
    Target IPK :
    <?php echo ($targetIPK)
    ?>
</p>
</body>
</html>
        
</body>
</html>

