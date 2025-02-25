Technical Service 


config


<?php
session_start(); // Oturum başlatma

$host = 'localhost';
$dbname = 'tsc';
$user = 'tsc';
$pass = 'zubzero12345';

// Veritabanı bağlantısı
$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // $username = $_POST['username'];
   $email = $_POST['email'];
    $password = $_POST['password'];

    // Kullanıcıyı doğrula
    $sql = "SELECT * FROM users WHERE email  = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$email]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password'])) {
      // Oturuma kullanıcı adı, e-posta ve isim ekle
      $_SESSION['username'] = $username;
      $_SESSION['email'] = $user['email'];
      $_SESSION['name'] = $user['name']; // İsim oturuma kaydedilir
       
               // Anasayfaya yönlendir
        header("Location: dashboard.php");
        exit(); // Yönlendirme sonrası script'i sonlandır
    } else {
        echo "Giriş bilgileri hatalı.";
    }
}
?>
