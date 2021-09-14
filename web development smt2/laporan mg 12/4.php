<?php 
$file_yang_akan_direname = "latihan1.txt";
$file_tujuan = "rename_latihan1.txt";
if (file_exists($file_yang_akan_direname)) {
    if (file_exists($file_tujuan)) {
        echo "File tujuan sudah ada";
    } else {
        rename($file_yang_akan_direname, $file_tujuan);
        echo "File ".$file_yang_akan_direname." berhasil direname ke ".$file_tujuan;
    }
}else {
    echo "File ".$file_yang_akan_direname."tidak ada";
}
?>
