<?php
session_start();
session_unset(); // Tüm oturum verilerini temizler
session_destroy(); // Oturumu sonlandırır
header('Refresh:2; url=./');
// header("Location: ./"); // Giriş sayfasına yönlendir
exit();
