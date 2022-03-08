<?php
/** BarcodeQR Sınıfımızı sayfamıza dahil ediyoruz */
require_once 'BarcodeQR.php';

/** BarcodeQR Sınıfımızdan bir nesne oluşturuyoruz */
$qrCode = new BarcodeQR();

/** QRCode üretmek istediğimiz bağlantıyı belirliyoruz */
$qrCode->url('https://kodsatirim.com');

/** Ürettiğimiz QRCode'u çizdiriyoruz. (pixel,dosya adı) */
$qrCode->draw(500,"QRCode.png");

/** Ürettiğimiz QRCode'u gösteriyoruz. */
echo '<img src="QRCode.png" alt="">';

?>

