<?php 
    function utama()
    {
        function tambah($var1, $var2)
        {
            return $var1 + $var2;
        }

        function kurang($var1, $var2)
        {
            return abs($var1 - $var2);
        }
    }
    utama();
    $jumlah = tambah(2,3);
    $beda = kurang(2,3);
    echo "$jumlah $beda";
?>