<?php 
$id_domanda = $_GET['id_domanda'];

include "./phpqrcode/qrlib.php";
$errorCorrectionLevel = 'L';
$matrixPointSize = 4;
$qr = './qr/'.time().'.png';
$code = 'http://'.$_SERVER['SERVER_NAME'].'/quiz/play.php'.(!empty($id_domanda) ? "?id_domanda={$id_domanda}":'');

QRcode::png($code, $qr, $errorCorrectionLevel, $matrixPointSize, 2);

header('Content-type: image/png;');
readfile($qr);