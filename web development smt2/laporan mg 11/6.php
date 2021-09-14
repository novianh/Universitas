<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hitung luas segitiga</title>
</head>
<body>
    <?php 
        function luasSegitiga($alas, $tinggi)
        {
            return $alas*$tinggi/2;
        }

    ?>
    <form action="6.php" method="post">
        <p>Masukkan alas segitiga: </p>
        <input name="alas" required type="number" placeholder="masukkan alas segitiga">
        <p>Masukkan tinggi segitiga</p>
        <input type="number" name="tinggi" id="tinggi" placeholder="masukkan tinggi segitiga" required>
        <p><input type="submit" value="hitung" name="submit"></p>
    </form>
        <span>Hasil:</span>
    <?php 
        if (isset($_POST['submit'])) {
            $hasil = luasSegitiga($_POST['alas'], $_POST['tinggi']);
            echo $hasil;
        }
    ?>
</body>
</html>