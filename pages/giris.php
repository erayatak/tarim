<?php
$sayfaBasligi = 'Giriş Yap';
require_once __DIR__ . '/../includes/header.php';
?>

<div class="ust-kisim">
    <h2>Giriş Yap</h2>

    <?php if (isset($_GET['kayit']) && $_GET['kayit'] === 'basarili'): ?>
        <p style="color: green;">Kayıt başarılı! Şimdi giriş yapabilirsiniz.</p>
    <?php endif; ?>

    <?php if (isset($_GET['hata'])): ?>
        <p style="color: red;"><?= htmlspecialchars($_GET['hata']) ?></p>
    <?php endif; ?>

    <form action="/php/login.php" method="POST" style="max-width: 350px; margin: 20px auto; text-align: left;">
        <label>E-posta:</label><br>
        <input type="email" name="e_posta" required style="width: 100%; padding: 8px; margin-bottom: 10px;"><br>

        <label>Şifre:</label><br>
        <input type="password" name="sifre" required style="width: 100%; padding: 8px; margin-bottom: 15px;"><br>

        <button type="submit" style="width: 100%; padding: 10px;">Giriş Yap</button>
    </form>

    <p>Hesabın yok mu? <a href="/pages/kayit.php">Kayıt Ol</a></p>
</div>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>