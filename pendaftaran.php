<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pendaftaran Siswa Baru SMK N 1 SAYUNG</title>
    <link rel="stylesheet" href="pendaftaran.css">
</head>
<center>
    <div class="container">
<body>
    <h3>Pendaftaran Siswa Baru</h3>
    <h3>SMK N 1 SAYUNG</h3>
    <form action="proses.php" method="post">
        <table border=0>
            <tr>
                <td>Nama Lengkap </td>
                <td>:<input type="text" name="nama"/></td>
            </tr>
            <tr> 
                <td>Tempat Lahir </td>
                <td>:<input type="text" name="tl"/></td>
            </tr>
            <tr>
                <td>Tanggal Lahir </td>
                <td>:<input type="date" name="birth" /></td>
            <tr>
                <td>Jenis Kelamin </td>
                <td>
                    <br>
                    <input type="radio" name="sex" value="Laki-Laki">Laki-Laki
                    <input type="radio" name="sex" value="Perempuan">Perempuan
                    </br>
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:<textarea name="alamat"></textarea></td>
            <tr>
                <td>Agama</td>
                <td>:
                    <select name="Agama">
                        <option>Islam</option>
                        <option>Kristen</option>
                        <option>Katholik</option>
                        <option>Buddha</option>
                        <option>Hindu</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <br>
                    <input type="reset" value="Ulangi" /></td>
                    <td>
                    <br>
                    <input type="submit" value="Submit" />
                 </td>
            </tr>
        </table>
    </form>
</body>
</center>
</html>