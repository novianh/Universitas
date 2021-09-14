<?php 
$file_yang_akan_dicopy = "latihan.txt";
$file_tujuan = "latihan1.txt";
if (file_exists($file_yang_akan_dicopy)) {
    if (file_exists($file_tujuan)) {
        echo "File tujuan sudah ada";
    } else {
        copy($file_yang_akan_dicopy, $file_tujuan);
        echo "File ".$file_yang_akan_dicopy." berhasil dicopy ke ".$file_tujuan;
    }
} else {
    echo "File ".$file_yang_akan_dicopy." tidak ada";
}
?>

