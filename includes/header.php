<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($sayfaBasligi ?? 'Tarım Ekipmanları Kullanım Planlama Sistemi') ?></title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <div class="ust-menu">
        <div class="logo">
            <h1 class="logo-text"><a href="/index.php">Tarım Sistemi</a></h1>
        </div>

        <nav class="ana-menu">
            <ul>
                <?php if (isset($_SESSION['kullanici_id'])): ?>
                    <?php if ($_SESSION['rol'] === 'yonetici'): ?>
                        <li><a href="/admin/panel.php">Yönetim Paneli</a></li>
                        <li><a href="/admin/ekipmanlar.php">Ekipmanlar</a></li>
                        <li><a href="/admin/talepler.php">Talepler</a></li>
                        <li><a href="/admin/loglar.php">Loglar</a></li>
                    <?php else: ?>
                        <li><a href="/user/panel.php">Panel</a></li>
                        <li><a href="/user/ekipmanlar.php">Ekipmanlar</a></li>
                        <li><a href="/user/talep-olustur.php">Talep Oluştur</a></li>
                        <li><a href="/user/taleplerim.php">Taleplerim</a></li>
                    <?php endif; ?>
                <?php else: ?>
                    <li><a href="/index.php#ozellikler">Özellikler</a></li>
                    <li><a href="/index.php#hakkinda">Hakkında</a></li>
                <?php endif; ?>
            </ul>
        </nav>

        <div class="ust-menu-button">
            <?php if (isset($_SESSION['kullanici_id'])): ?>
                <a href="/php/logout.php">Çıkış Yap</a>
            <?php else: ?>
                <a href="/pages/giris.php">Giriş Yap</a>
            <?php endif; ?>
        </div>
    </div>