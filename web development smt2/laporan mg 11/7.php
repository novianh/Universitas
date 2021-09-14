<?php 
    $nama = "novia nur hamidah";
    echo"a. " .strtolower( "NOVIA NUR HAMIDAH");
    echo "<br>b. " .strtoupper($nama);
    echo "<br>c. " .ucwords($nama);
    echo "<br>d. " .ucfirst($nama);
    echo "<br>e. " .str_replace(' ', '', $nama); 
    if (substr_count($nama,"x") == 0) {
    echo "<br>f. tidak ditemukan";
    } elseif (substr_count($nama,"x") != 0) {
        echo "<br>f. ".substr_count($nama,"x");
    }
?>
