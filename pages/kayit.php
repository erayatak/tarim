<?php
$sayfaBasligi = 'Kayıt Ol';
require_once __DIR__ . '/../includes/header.php';
?>

<div class="ust-kisim">
    <h2>Kayıt Ol</h2>

    <?php if (isset($_GET['hata'])): ?>
        <p style="color: red;"><?= htmlspecialchars($_GET['hata']) ?></p>
    <?php endif; ?>

    <form action="/php/register.php" method="POST" style="max-width: 350px; margin: 20px auto; text-align: left;">
        <label>Ad Soyad:</label><br>
        <input type="text" name="ad_soyad" required style="width: 100%; padding: 8px; margin-bottom: 10px;"><br>

        <label>E-posta:</label><br>
        <input type="email" name="e_posta" required style="width: 100%; padding: 8px; margin-bottom: 10px;"><br>

        <label>Şifre:</label><br>
        <input type="password" name="sifre" minlength="6" required style="width: 100%; padding: 8px; margin-bottom: 15px;"><br>

        <button type="submit" style="width: 100%; padding: 10px;">Kayıt Ol</button>
    </form>

    <p>Zaten hesabın var mı? <a href="/pages/giris.php">Giriş Yap</a></p>
</div>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>