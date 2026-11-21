<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Giriş yapmamışsa giriş sayfasına at
function girisKontrol() {
    if (!isset($_SESSION['kullanici_id'])) {
        header('Location: /pages/giris.php');
        exit;
    }
}

// Giriş yapmış ama yönetici değilse kendi paneline at
function yoneticiKontrol() {
    girisKontrol();
    if ($_SESSION['rol'] !== 'yonetici') {
        header('Location: /user/panel.php');
        exit;
    }
}