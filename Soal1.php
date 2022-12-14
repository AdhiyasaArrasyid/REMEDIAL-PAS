<?php
    for($angka=1;$angka<=20;$angka++){
        if($angka % 2 == 0){
            echo "$angka = ";echo "<font style='color:red;'>Kalau yang ini bilangan genap</font><br>";
        }
        else{
            echo "$angka = ";echo "<font style='color:blue;'>Ini bilangan ganjil</font><br>";
        }
    }
?>