<?php 
$file_yang_akan_dihapus = "latihan.txt";
if (file_exists($file_yang_akan_dihapus)) {
    unlink($file_yang_akan_dihapus);
    echo "File ".$file_yang_akan_dihapus." berhasil dihapus";
} else {
    echo "File ".$file_yang_akan_dihapus." tidak ada";
}
?>

