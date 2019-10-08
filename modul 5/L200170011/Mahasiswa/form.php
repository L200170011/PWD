<html>
    <head><title>Data Mahasiswa</title></head>
        <?php
            $conn=mysqli_connect('localhost','root','','informatika');
        ?>
        <body>
            <center>
                <h3>Masukan Data Mahasiswa :</h3>
                    <table border='0' width='30%'>
                    <form method='post' action='form.php'>
                        <tr>
                            <td width='25%'>NIM</td>
                            <td width='5%'>:</td>
                            <td width='65%'><input type='text' name='nim' size='10'></td>
                        </tr>
                        <tr>
                            <td width='25%'>Nama</td>
                            <td width='5%'>:</td>
                            <td width='65%'><input type='text' name='nama' size='30'></td>
                        </tr>
                        <tr>
                            <td width='25%'>Kelas</td>
                            <td width='5%'>:</td>
                            <td width='65%'><input type='radio' value='A' checked name='kelas'>A
                                            <input type='radio' value='B' name='kelas'>B
                                            <input type='radio' value='C' name='kelas'>C</td>
                        </tr>
                        <tr>
                            <td width='25%'>Alamat</td>
                            <td width='5%'>:</td>
                            <td width='65%'><input type='text' name='alamat' size='40'></td>
                        </tr>
                    </table>
                    <input type='submit' value='Masukan' name='submit'>
                    </form>
                    <?php
                    error_reporting(E_ALL ^ E_NOTICE);
                    $nim = $_POST['nim'];
                    $nama = $_POST['nama'];
                    $kelas = $_POST['kelas'];
                    $alamat = $_POST['alamat'];
                    $submit = $_POST['submit'];
                    $input = "insert into mahasiswa (nim, nama, kelas, alamat)values('$nim', '$nama', '$kelas', '$alamat')";
                    if ($submit){
                        if ($nim==''){
                            echo "NIM tidak boleh kosong";
                        }elseif ($nama==''){
                            echo "Nama tidak boleh kosong";
                        }elseif ($alamat==''){
                            echo "Alamat tidak boleh kosong";
                        }else{
                            mysqli_query($conn, $input);
                            echo "Data Berhasil dimasukkan";
                        }
                    }
                    ?>
<hr>
<h3>Data Mahasiswa</h3>
<table border='1' width='50%'>
<tr>
<td align='center' width='20%'><b>NIM</b></td>
<td align='center' width='30%'><b>Nama</b></td>
<td align='center' width='10%'><b>Kelas</b></td>
<td align='center' width='30%'><b>Alamat</b></td>
<td colspan= 2 align='center' width='30%'><b>Keterangan</b></td>
</tr>
<?php
$cari = "select * from mahasiswa order by nim";
$hasil_cari = mysqli_query($conn,$cari);
while ($data = mysqli_fetch_row($hasil_cari)){
echo"
<tr>
<td width='20%'>$data[0]</td>
<td width='30%'>$data[1]</td>
<td width='10%'>$data[2]</td>
<td width='30%'>$data[3]</td>
<td><a href='update_form.php?NIM=$data[0]'>ubah</a></td>
<td><a href='delete.php?NIM=$data[0]'>Hapus</a></td>
</tr>";
}
?>
</table>
</center>
</body>
</html>