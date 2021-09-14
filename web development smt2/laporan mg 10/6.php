<?php 
    $nilai = array (
        "Ahmad" => array (
            "fisika" => 35,
            "matematika" => 30,
            "kimia" => 39
        ),
        "Kadir" => array (
            "fisika" => 30,
            "matematika" => 32,
            "kimia" => 29
        ),
        "Zahra" => array (
            "fisika" => 31,
            "matematika" => 22,
            "kimia" => 39
        )
    );
    echo "Nilai fisika untuk Ahmad : ";
    echo $nilai["Ahmad"]["fisika"]. "<br />";
    echo "Nilai matematika untuk Kadir : ";
    echo $nilai["Kadir"]["matematika"]. "<br />";
    echo "Nilai kimia untuk Zahra : ";
    echo $nilai["Zahra"]["kimia"]. "<br />";
?>