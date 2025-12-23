<?php
include 'bağlan.php'; // Klasöründeki isimle aynı yapıldı

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $baslik = $_POST['baslik'];
    $tur = $_POST['tur'];
    $sehir = $_POST['sehir'];
    $aciklama = $_POST['aciklama'];

    $target_dir = "images/";
    if (!file_exists($target_dir)) { mkdir($target_dir, 0777, true); }

    $resim_adi = time() . "_" . basename($_FILES["resim"]["name"]);
    $target_file = $target_dir . $resim_adi;

    if (move_uploaded_file($_FILES["resim"]["tmp_name"], $target_file)) {
        $sql = "INSERT INTO ilanlar (baslik, tur, sehir, resim, aciklama) VALUES ('$baslik', '$tur', '$sehir', '$resim_adi', '$aciklama')";
        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('İlan Yayında!'); window.location.href='ilanara.php';</script>";
        }
    } else {
        echo "Resim yükleme hatası!";
    }
}
?>