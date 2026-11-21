<?php
require_once __DIR__ . '/config.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: /pages/giris.php');
    exit;
}

$ePosta = trim($_POST['e_posta'] ?? '');
$sifre  = $_POST['sifre'] ?? '';

$sorgu = $pdo->prepare('SELECT kullanici_id, ad_soyad, sifre, rol FROM kullanicilar WHERE e_posta = ?');
$sorgu->execute([$ePosta]);
$kullanici = $sorgu->fetch();

if (!$kullanici || !password_verify($sifre, $kullanici['sifre'])) {
    header('Location: /pages/giris.php?hata=E-posta veya şifre hatalı.');
    exit;
}

// Giriş başarılı: Oturum bilgilerini kaydet
$_SESSION['kullanici_id'] = $kullanici['kullanici_id'];
$_SESSION['ad_soyad']     = $kullanici['ad_soyad'];
$_SESSION['rol']          = $kullanici['rol'];

// Rolüne göre yönlendir
if ($kullanici['rol'] === 'yonetici') {
    header('Location: /admin/panel.php');
} else {
    header('Location: /user/panel.php');
}
exit;