<?php
mb_internal_encoding('UTF-8');
date_default_timezone_set('Europe/Madrid');

$to = 'info@velatstudio.com';
$dir = __DIR__ . '/respuestas';
if (!is_dir($dir)) { @mkdir($dir, 0755, true); }

$datos = [];
foreach ($_POST as $campo => $valor) {
  if (is_array($valor)) { $valor = implode(', ', $valor); }
  $campo = ucfirst(str_replace('_', ' ', preg_replace('/[^a-z0-9_]/i', '', $campo)));
  $valor = trim($valor);
  $datos[] = "{$campo}: " . htmlspecialchars($valor, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

$timestamp = date('Y-m-d H:i:s');
$mensajeTxt  = "-----\nFecha: {$timestamp}\n" . implode("\n", $datos) . "\n\n";
$mensajeHtml = nl2br($mensajeTxt);

// Guardar en archivo
$file = $dir . '/respuestas_cuestionario.txt';
@file_put_contents($file, $mensajeTxt, FILE_APPEND | LOCK_EX);

// Enviar mail
$subject = 'Nueva respuesta – Cuestionario Velat (Adultos)';
$headers = [];
$headers[] = "From: {$to}";
$headers[] = "MIME-Version: 1.0";
$headers[] = "Content-Type: text/html; charset=UTF-8";
@mail($to, $subject, $mensajeHtml, implode("\r\n", $headers));

// Redirigir
header('Location: gracias.html');
exit;
