<?php
// Oturum (Session) henüz başlatılmadıysa başlat (Giriş yapan kullanıcıyı hatırlamak için)
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$host = '127.0.0.1';
$dbname = 'tarim_ekipman_sistemi';
$username = 'root';
$password = '';

try {
    $pdo = new PDO(
        "mysql:host=$host;dbname=$dbname;charset=utf8mb4",
        $username,
        $password,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,       // Hata olursa yakala
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC // Verileri sütun adıyla getir
        ]
    );
} catch (PDOException $e) {
    die("Veritabanı bağlantı hatası: " . $e->getMessage());
}