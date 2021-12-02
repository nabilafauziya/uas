<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penggajian PT.Selalu Makmur Jaya</title>
</head>
<body>
    <form action="penggajian2.php" method="post">

    <table>

        <h2>Penggajian Karyawan</h2>
        <h1>PT.Selalu Makmur Jaya</h1>

        <tr>
            <td><label for="bendahara">Nama Bendahara</label></td>
            <td>:</td>
            <td><input type="text" name="bendahara" id="bendahara"></td>
        </tr>
        <tr>
            <td><label for="pekerja">Nama Pekerja</label></td>
            <td>:</td>
            <td><input type="text" name="pekerja" id="pekerja"></td>
        </tr>
        <tr>
            <td><label for="jl">Jenis Kelamin</label></td>
            <td>:</td>
            <td>
                <label><input type="radio" name="jl" value="Laki - Laki">Laki - Laki</label>
                <label><input type="radio" name="jl"  value="Perempuan" >Perempuan</label>
            </td>
        </tr>
        <tr>
            <td><label for="tanggal">Tanggal Gaji</label></td>
            <td>:</td>
            <td><input type="date" name="tanggal" id="tanggal"></td>
        </tr>
        <tr>
            <td><label for="jabatan">Jabatan</label></td>
            <td>:</td>
            <td>
                <select name="jabatan">
                    <option value="Direktur" name="jabatan">--- Direktur ---</option>
                    <option value="Manager" name="jabatan">--- Manager ---</option>
                    <option value="Sekertaris" name="jabatan">--- Sekertaris ---</option>
                    <option value="Karyawan" name="jabatan">--- Karyawan ---</option>
                    <option value="OB" name="jabatan">--- OB ---</option>
                </select>
            </td>
        </tr>
        <tr>
            <td><label for="pendidikan">Pendidikan Terakhir</label></td>
            <td>:</td>
            <td>
                <select name="pendidikan" >
                    <option value="SD" name="pendidikan">--- SD ---</option>
                    <option value="SMP" name="pendidikan">--- SMP ---</option>
                    <option value="SMA" name="pendidikan">--- SMA ---</option>
                    <option value="S1" name="pendidikan">--- S1 ---</option>
                    <option value="S2" name="pendidikan">--- S2 ---</option>
                </select>
            </td>
        </tr>
        <tr>
            <td><label for="status">Status Pegawai</label></td>
            <td>:</td>
            <td>
                <label><input type="radio" name="status" value="Tetap">Tetap</label>
                <label><input type="radio" name="status" value="Kontrak">Kontrak</label>
            </td>
        </tr>
        <tr>
            <td><label for="lembur">Lembur</label></td>
            <td>:</td>
            <td><input type="text" name="lembur"> Hari/Rp.20.000</td>
        </tr>
        <tr>
            <td><label for="bpjs">Potongan BPJS</label></td>
            <td>:</td>
            <td><input type="text" name="bpjs"></td>
        </tr>
        <tr>
            <td><input type="submit" name="kirim" value="KIRIM"></td>
        </tr>
    </table>
    </form>


</body>
</html>
