<?php
$key = $_POST["k"];
$ciphertext = $_POST["c"];
$iv = $_POST["iv"];

$plaintext = mcrypt_decrypt(MCRYPT_RIJNDAEL_256, $key, base64_decode($ciphertext), MCRYPT_MODE_CBC, base64_decode($iv));

echo($plaintext);
?>

