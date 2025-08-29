<?php
    echo("ini Logic.php <br>");
    
    $nama = $_POST['nama'];
    $alias = $_POST['alias'];
    $tgl = $_POST['tgl'];
    $alamat = $_POST['alamt'];
    $jk = $_POST['jk'];

    // (2025-08-29) - (2020-01-29)
    $sekarang = date("y-m-d");

    $birthDate = new DateTime($tgl);
    $today     = new DateTime($sekarang);
    $umur      = $birthDate->diff($today);

    // jika umur dibawah 5 tahun = bayi / balita 
    // bawah 12 tahun anak anak
    // dibawah 17 tahun remaja 
    // diatas 17 dewasa

    if ($umur->y <= 5){
        $status = "bayi/balita";
    } else if ($umur->y <= 12) {
        $status = "anak anak";
    } else if ($umur->y <= 17) {
        $status = "remaja";
    } else {
        $status = "dewasa";
    }

    if(str_contains($nama, $alias)) {
        $jawaban = "benar";
    } else {
        $jawaban = "salaj";
    }

    echo("
        Nama : ".$nama."<br>
        alias : ".$alias."<br>
        tanggal lahir : ".$tgl."<br>
        alamat : ".$alamat."<br>
        jenis kelamin : ".$jk."<br>
        sekarang : ".$sekarang."<br>
        alias valid ? : ".$jawaban."<br>
        umur : ".$umur->y." tahun ".$umur->m." Bulan ".$umur->d." Hari<br>
        status : ".$status."<br>
    ");
// ?>