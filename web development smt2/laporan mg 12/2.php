<?php 
$file = "latihan.txt";
if ($handle = fopen($file, "r")) {
    while (!feof($handle)) {
        $isi = "";
        $isi .= fgets($handle);
        echo $isi;
    }
} else {
    echo "Tidak dapat membaca file ".$file;
}
?>

