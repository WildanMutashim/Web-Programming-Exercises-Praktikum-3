<?php
    function hitungDenda($tgl1,$tgl2){

        // memecah tanggal untuk mendapatkan bagian tanggal, bulan dan tahun
        // dari tanggal pertama

        $exp1=explode("-",$tgl1);
        $dd1=$exp1[2];
        $mm1=$exp1[1];
        $yyyy1=$exp1[0];

        // memecah tanggal untuk mendapatkan bagian tanggal, bulan dan tahun
        // dari tanggal kedua

        $exp2=explode("-",$tgl2);
        $dd2=$exp2[2];
        $mm2=$exp2[1];
        $yyyy2=$exp2[0];

        // menghitung JDN dari masing-masing tanggal

        $jd1=GregorianToJD($mm1,$dd1,$yyyy1);
        $jd2=GregorianToJD($mm2,$dd2,$yyyy2);

        // hitung selisih hari kedua tanggal

        $selisih=$jd2-$jd1;
        $denda=$selisih*3000;
        echo "Besarnya denda adalah: Rp ".$denda;
    }

    hitungDenda("2021-01-03","2021-01-05");
?>