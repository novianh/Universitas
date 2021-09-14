<?php 
$file = "latihan.txt";
$data = "Ini adalah kalimat yang dituliskan menggunakan PHP";
if (file_exists($file)) {
    echo "File ".$file." sudah ada. Gagal membuat file.";
} else {
    $handle = fopen($file,"w");
    fputs($handle, $data);
    fclose($handle);
    echo "File ".$file." berhasil dibuat";
}
?>

