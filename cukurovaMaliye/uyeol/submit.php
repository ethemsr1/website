<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST['fullname'];
    $student_id = $_POST['student_id'];
    $department = $_POST['department'];
    $class = $_POST['class'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $reason = $_POST['reason'];
    $interests = isset($_POST['interest']) ? implode(", ", $_POST['interest']) : "Belirtilmedi";

    // Kayıt edilecek dosya yolu
    $file = 'applications.txt';

    // Veriyi dosyaya kaydetme
    $data = "Ad Soyad: $fullname | Öğrenci No: $student_id | Bölüm: $department | Sınıf: $class | Telefon: $phone | E-posta: $email | Sebep: $reason | İlgi Alanları: $interests\n";
    file_put_contents($file, $data, FILE_APPEND);

    echo "Başvurunuz alınmıştır. Teşekkür ederiz!";
} else {
    echo "Geçersiz istek!";
}
?>
