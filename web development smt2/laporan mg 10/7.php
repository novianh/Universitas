<?php 
    $kategori = array (array ( array ( 'CAR_TIR', 'Ban', 300000),
                array ('CAR_OIL', 'Oli', 70000),
                array ('CAR_ENG', 'Mesin', 4000000)
                ),
            array ( array ( 'VAN_TIR', 'Ban', 320000),
                array('VAN_OIL', 'Oli', 80000),
                array ('VAN_ENG', 'Mesin', 5500000)
                ),
            array ( array ( 'BUS_TIR', 'Ban', 360000),
                array('BUS_OIL', 'Oli', 950000),
                array ('BUS_ENG', 'Mesin', 8500000)
                )
            );
            for ($layer=0; $layer < 3; $layer++) { 
                echo "Layer $layer<br />";
                for ($row=0; $row <3; $row++) { 
                    for ($kolom=0; $kolom < 3; $kolom++) { 
                        echo ' | '.$kategori[$layer][$row][$kolom];
                    }
                    echo " | <br />";
                }
            }
?>