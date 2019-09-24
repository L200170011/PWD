<html>
    <head>
        <title>Tugas 2</title>
    </head>
    <body>
        <h1>Cek Bilangan</h1>
        <form method="POST" action="tugas2.php">
            <p>Masukkan angkanya <input type="integer" name="angka" size="20"></p>
            <p><input type="submit" value="CEK" name="submit"></p>
        </form>
        <?php
            error_reporting (E_ALL ^ E_NOTICE); 
            $angka = $_POST["angka"];
            $submit = $_POST["submit"];
            if($submit){
                if($angka % 2 == 0){
                    echo"</br>Angka anda adalah angka Genap";
                }else{
                    echo"</br>Angka anda adalah angka Ganjil";
                }
            }
        ?>
    </body>
</html>