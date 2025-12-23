<?php
$host = "localhost";
$user = "root"; // XAMPP/WAMP varsayılan kullanıcı
$pass = "";     // XAMPP/WAMP varsayılan şifre boştur
$db   = "patili_evler";

$conn = new mysqli($host, $user, $pass, $db);

// Bağlantıyı ve karakter setini kontrol et
if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}
$conn->set_charset("utf8");
?>