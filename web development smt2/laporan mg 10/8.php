<?php 
    $siswa = array(
        array(1, 75, 'Andi'),
        array(2, 80, 'Joni'),
        array(3, 65, 'Jihan'),
        array(4, 70, 'Aya'),
        array(5, 85, 'Ita'),
        array(6, 90, 'Budi'),
        array(7, 95, 'Tini'),
        array(8, 65, 'Sari')
    );
    echo "a. <br>";
    echo "No | Nilai | Nama";
    for ($layer=0; $layer < count($siswa); $layer++) { 
        echo "<br />";
        for ($row=0; $row <3; $row++) { 
            echo ' | '.$siswa[$layer][$row];
        }
    }
    for ($i=0; $i < count($siswa)+1; $i++) {
        if ($i == 4) {
            echo "<br><br>b. Poin siswa dengan No urut 5 adalah <b>".$siswa[$i][1]."</b>";
        } elseif ($i == 5) {
            echo "<br>c. Poin dan nama siswa yang memiliki poin ".$siswa[$i][1]. " adalah <b>".$siswa[$i][2]."</b>";
        } elseif ($i == 8) {
            echo "<br>d. Poin dan nama siswa yang memiliki poin 100 adalah <b>tidak ada</b> ";
        }
    }
    ?>
