<?php 
session_start();
if (isset($_SESSION["user"])) {
    echo "Selamat datang <b>".$_SESSION["user"]. "</b>, anda berhasil login.<br>";
    echo "<a href= 'logout.php'>logout</a>";
} else {
    echo "Maaf anda tidak berhak mengakses halaman ini, mohon login dahulu.";
}
?>