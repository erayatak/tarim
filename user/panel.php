<?php
require_once __DIR__ . '/../php/auth.php';
kullaniciKontrol(); // Giriş yapmamışsa buraya giremez

$sayfaBasligi = 'Kullanıcı Paneli';
require_once __DIR__ . '/../includes/header.php';
?>

<div class="ust-kisim">
    <h2>Hoş geldin, <?= htmlspecialchars($_SESSION['ad_soyad']) ?></h2>
    <p>Buradan ekipmanları inceleyebilir ve yeni kullanım talebi oluşturabilirsin.</p>
</div>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>