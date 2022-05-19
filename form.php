<7php

$nombre = $_POST[name];
$mail = $_POST[email];
$texterea = $_POST[mensaje];

$mensaje = "este mensaje fue enviado por" . $nombre . ,\r\n;
$mensaje .= "su e-mail es: " . $mail . \r\n;
$mensaje .= "mensaje: " . $_POST[´mensaje´] . \r\n;
$mensaje .= "enviado el " .date(s\m\Y , time());

$para = "eriksosa125@oulook.com"
$asunto =  "este mail fue enviado desde la webe"

mail($para, $asunto, utf8_decode($mensaje), $header);

header(´locattion:index.html)

?>
