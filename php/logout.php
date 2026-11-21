<?php
session_start();
session_unset();    // Oturum değişkenlerini temizle
session_destroy();  // Oturumu tamamen yok et
header('Location: /pages/giris.php');
exit;