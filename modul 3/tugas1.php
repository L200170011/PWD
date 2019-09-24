<html>
    <head>
        <title>Tugas 1</title>
    </head>
    <body>
        <h1>Penjumlahan</h1>
        <form method="POST" action="tugas1.php">
            <p>Nilai A adalah <input type="integer" name="nilaiA" size="20"></p>
            <p>Nilai B adalah <input type="integer" name="nilaiB" size="20"></p>
            <p><input type="submit" value="Jumlahkan" name="submit"></p>
        </form>
        <?php
            error_reporting (E_ALL ^ E_NOTICE); 
            $nA = $_POST["nilaiA"];
            $nB = $_POST["nilaiB"];
            $submit = $_POST["submit"];
            if($submit){
                $hasil = $nA + $nB;
                echo"</br>Nilai A adalah $nA";
                echo"</br>Nilai B adalah $nB";
                echo"</br>Jadi Nilai A ditambah Nilai B adalah $hasil";
            }
        ?>
    </body>
</html>