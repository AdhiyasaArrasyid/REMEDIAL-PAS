<?php
    $NIS = $_GET['NIS']; 
    $Nama_Siswa = $_GET['Nama_Siswa'];
    $Kelas = $_GET['Kelas'];   
    $Jurusan = $_GET['Jurusan'];    
    $Prestasi = $_GET['Prestasi'];

    echo "<Font color ='red'> Pendaftaran Siswa Berprestasi</font> <br>";
    echo "NIS        : ".$NIS,"<br>";
    echo "Nama Siswa : ".$Nama_Siswa,"<br>";
    echo "Kelas      : ".$Kelas,"<br>";
    echo "Jurusan    : ".$Jurusan,"<br>";
    echo "Prestasi   : ".$Prestasi,"<br>";
?>