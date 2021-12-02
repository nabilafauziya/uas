<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HForm Penggajian</title>
</head>
<body>
    
<?php

if (isset ($_POST ["kirim"])){

    $tanggal = $_POST ["tanggal"];
    $pekerja = $_POST ["pekerja"];
    $jl = $_POST ["jl"];
    echo "<br>";
    echo "<h1>Struk Gaji Karyawan</h1> <br>";
    echo "----------------------------------------------- <br>";

        echo "Tanggal :  $tanggal <br><br>";

        echo "<h2><b><i> Gaji Pokok </i></b></h2>";
        echo "<br>";
        echo "Nama Karyawan : $pekerja <br>";
    
    if (isset ($_POST ["jl"])){
        if ($_POST ["jl"] == "Laki - Laki"){
            echo "Jenis Kelamin : $jl <br>";
        }
        else if ($_POST ["jl"] == "Perempuan"){
            echo "Jenis Kelamin : $jl <br>";
        }
    }
    
    $pendidikan = $_POST ["pendidikan"];
    
    if (isset($_POST ["pendidikan"])) {
        if ($_POST ["pendidikan"] == "SD") {
            echo "Pendidikan Terakhir : $pendidikan <br>";
        }
        elseif ($_POST ["pendidikan"] == "SMP") {
            echo "Pendidikan Terakhir : $pendidikan <br>";
        }
        elseif ($_POST ["pendidikan"] == "SMA") {
            echo "Pendidikan Terakhir : $pendidikan <br>";
        }
        elseif ($_POST ["pendidikan"] == "S1") {
            echo "Pendidikan Terakhir : $pendidikan <br>";
        }
        elseif ($_POST ["pendidikan"] == "S2") {
            echo "Pendidikan Terakhir : $pendidikan <br>";
        }
    }
    
    $jabatan = $_POST ["jabatan"];
    if (isset($_POST ["jabatan"])) {
        if ($_POST ["jabatan"] == "Direktur") {
            echo "Jabatan : $jabatan <br>";
            echo "Gaji : Rp. 10.000.000 <br><br>";
        }
        else if ($_POST ["jabatan"] == "Manager") {
            echo "Jabatan : $jabatan <br>";
            echo "Gaji : Rp. 7.500.000 <br><br>";
        }
        else if ($_POST ["jabatan"] == "Sekertaris") {
            echo "Jabatan : $jabatan <br>";
            echo "Gaji : Rp. 5.000.000 <br><br>";
        }
        else if ($_POST ["jabatan"] == "Karyawan") {
            echo "Jabatan : $jabatan <br>";
            echo "Gaji : Rp. 3.000.000 <br><br>";
        }
        else if ($_POST ["jabatan"] == "OB") {
            echo "Jabatan : $jabatan <br>";
            echo "Gaji : Rp. 1.500.000 <br><br>";
        }
    }
    
    echo "<h2><b><i> Tunjangan </i></b></h2>";
    echo "<br>";
    
    if (isset($_POST ["pendidikan"])) {
        if ($_POST ["pendidikan"] == "SD") {
            echo "Tunjangan Pendidikan : Rp. 200.000 <br>";
        }
        else if ($_POST ["pendidikan"] == "SMP") {
            echo "Tunjangan Pendidikan : Rp. 500.000 <br>";
        }
        else if ($_POST ["pendidikan"] == "SMA") {
            echo "Tunjangan Pendidikan : Rp. 1.000.000 <br>";
        }
        else if ($_POST ["pendidikan"] == "S1") {
            echo "Tunjangan Pendidikan : Rp. 1.500.000 <br>";
        }
        else if ($_POST ["pendidikan"] == "S2") {
            echo "Tunjangan Pendidikan : Rp. 2.000.000 <br>";
        }
    }
    
    $lembur = $_POST ["lembur"];
    if (isset($_POST ["lembur"])) {
        $vakasi = $lembur * 20000;
        echo "Vakasi Lembur : Rp.  $vakasi <br>";
    }
    
    $status = $_POST ["status"];
    if (isset($_POST ["status"])) {
        if ($_POST ["status"] == "Tetap") {
            echo "Bonus Status Kerja : Rp. 500.000 <br>";
        }
        else if ($_POST ["status"] == "Kontrak") {
            echo "Bonus Status Kerja : Rp. 0 <br>";
        }
    }
    
    $bpjs = $_POST ["bpjs"];
    echo "";


}

?>

</body>
</html>
