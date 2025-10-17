<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $to = "seninmailin@ornek.com"; // Buraya kendi mail adresini yaz
    $subject = "İletişim Formu Mesajı";
    $adsoyad = htmlspecialchars($_POST['adsoyad']);
    $email = htmlspecialchars($_POST['email']);
    $mesaj = htmlspecialchars($_POST['mesaj']);

    $body = "Ad Soyad: $adsoyad\nE-posta: $email\nMesaj:\n$mesaj";
    $headers = "From: $email";

    if(mail($to, $subject, $body, $headers)){
        echo "Mesajınız başarıyla iletildi.";
    } else {
        echo "Mesaj gönderilemedi. Lütfen tekrar deneyin.";
    }
}
?>