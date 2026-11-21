<?php
require_once __DIR__ . '/config.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: /pages/kayit.php');
    exit;
}

$adSoyad = trim($_POST['ad_soyad'] ?? '');
$ePosta  = trim($_POST['e_posta'] ?? '');
$sifre   = $_POST['sifre'] ?? '';

if ($adSoyad === '' || $ePosta === '' || strlen($sifre) < 6) {
    header('Location: /pages/kayit.php?hata=Lütfen tüm alanları geçerli doldurun.');
    exit;
}

// Bu e-posta daha önce alınmış mı kontrol et
$kontrol = $pdo->prepare('SELECT kullanici_id FROM kullanicilar WHERE e_posta = ?');
$kontrol->execute([$ePosta]);

if ($kontrol->fetch()) {
    header('Location: /pages/kayit.php?hata=Bu e-posta zaten kayıtlı.');
    exit;
}

// Şifreyi güvenli şekilde hash'le ve kaydet
$sifreHash = password_hash($sifre, PASSWORD_DEFAULT);

$ekle = $pdo->prepare('INSERT INTO kullanicilar (ad_soyad, e_posta, sifre, rol) VALUES (?, ?, ?, "kullanici")');
$ekle->execute([$adSoyad, $ePosta, $sifreHash]);

header('Location: /pages/giris.php?kayit=basarili');
exit;