<?php
require_once __DIR__ . '/../php/auth.php';
yoneticiKontrol(); // Sadece rolü 'yonetici' olanlar girebilir

$sayfaBasligi = 'Yönetim Paneli';
require_once __DIR__ . '/../includes/header.php';
?>

<div class="ust-kisim">
    <h2>Yönetici Paneli - <?= htmlspecialchars($_SESSION['ad_soyad']) ?></h2>
    <p>Buradan ekipmanları, talepleri ve sistem loglarını yöneteceksin.</p>
</div>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>