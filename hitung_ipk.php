<?php
    function hitung(){
        $datas = $_POST['nilai_matkul'];
        $sum = 0;
        foreach($datas as $data) $sum += (int)$data;
        
        return $sum/sizeof($datas);
    }
    
    function status(){
        if(hitung()>1) return "Lulus";
        return "Tidak Lulus";
    }
    
    echo "<h1>Hasil Perhitungan IPK dan Status Kelulusan</h1><br>";
    echo "IPK: " . hitung() . "<br>";
    echo "Status Kelulusan: " . status();
?>