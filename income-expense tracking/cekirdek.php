<?php
/* veritabanı bağlantısı */
$connection = mysqli_connect("localhost", "root", "");
function baglanVeritabani() {
    global $connection;
    if (!$connection) {
        die("Veritabanı bağlantısı başarısız: " . mysqli_connect_error());
    }
    mysqli_select_db($connection, "muhasebe");
    mysqli_query($connection, "SET NAMES 'utf8'");
}

function ekleMuhasebeKayit($miktar, $tarih, $aciklama) {
    global $connection;
    $sorgu = "INSERT INTO tbl_gelirgider SET miktar = '$miktar', tarih = '$tarih', aciklama = '$aciklama'";
    return mysqli_query($connection, $sorgu);
}

function guncelleMuhasebeKayit($ID, $miktar, $tarih, $aciklama) {
    global $connection;
    $sorgu = "UPDATE tbl_gelirgider SET miktar = '$miktar', tarih = '$tarih', aciklama = '$aciklama' WHERE ID = '$ID'";
    return mysqli_query($connection, $sorgu);
}

function silMuhasebeKayit($ID) {
    global $connection;
    $sorgu = "DELETE FROM tbl_gelirgider WHERE ID = '$ID'";
    return mysqli_query($connection, $sorgu);
}

function getirMuhasebeKayitlar() {
    global $connection;
    $sorgu = "SELECT * FROM tbl_gelirgider";
    $sonuc = mysqli_query($connection, $sorgu);
    $cevap = array();
    while ($satir = mysqli_fetch_assoc($sonuc)) {
        $cevap[] = $satir;
    }
    return $cevap;
}

function getirMuhasebeBakiye () {
    global $connection;
    $sorgu = "SELECT SUM(miktar) AS bakiye FROM tbl_gelirgider";
    $sonuc = mysqli_query($connection, $sorgu);
    return mysqli_fetch_assoc($sonuc);
}
  
baglanVeritabani();
?>