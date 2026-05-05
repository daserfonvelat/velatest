<?php
// Codificación y zona horaria
mb_internal_encoding('UTF-8');
date_default_timezone_set('Europe/Madrid');

// Sanitizar
$nombre  = trim($_POST['nombre'] ?? '');
$email   = trim($_POST['email'] ?? '');
$mensaje = trim($_POST['mensaje'] ?? '');

if ($nombre === '' || $email === '' || $mensaje === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
  header('Location: gracias.php?ok=0'); // opcional: página de error propio
  exit;
}

// Construir email
$to      = 'info@velatstudio.com';
$subject = 'Nuevo mensaje de contacto en velatstudio.com';
$bodyTxt = "Fecha: ".date('Y-m-d H:i:s')."\nNombre: {$nombre}\nEmail: {$email}\n\nMensaje:\n{$mensaje}\n";
$headers = [];
$headers[] = "From: {$nombre} <{$email}>";
$headers[] = "Reply-To: {$email}";
$headers[] = "MIME-Version: 1.0";
$headers[] = "Content-Type: text/plain; charset=UTF-8";

$sent = @mail($to, $subject, $bodyTxt, implode("\r\n", $headers));

// Redirigir siempre a gracias (si quieres, añade ?ok=1/0 y lees ese flag en la vista)
header('Location: gracias.html'.($sent ? '?ok=1' : '?ok=0'));
exit;
