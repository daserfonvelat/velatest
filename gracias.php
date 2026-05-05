<?php
  // Lee flag de éxito/fracaso si llega desde el mail o guardado
  $ok        = isset($_GET['ok']) ? ($_GET['ok'] === '1') : null;
  $page_title = 'Gracias — velat_.studio';
  $page_desc  = 'Confirmación de envío de mensaje.';
  $active     = ''; // sin activo específico
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <?php include __DIR__.'/partials/head.php'; ?>
  <style>
    main{max-width:420px;margin:100px auto 140px;padding:46px 28px;background:#fff;border-radius:10px;box-shadow:0 2px 16px rgba(0,0,0,.07);text-align:center}
    h1{font-size:1.2em;letter-spacing:2px;margin:0 0 4px}
    p{margin:12px 0 0;line-height:1.6}
    .muted{color:#858585}
    .ok{color:#1a7f37}
    .ko{color:#b70028}
    .btn{display:inline-block;margin-top:18px;padding:10px 16px;border-radius:8px;background:#eee;color:#111;text-decoration:none}
    .btn:hover{background:#ddd}
  </style>
</head>
<body>
  <?php include __DIR__.'/partials/header.php'; ?>

  <main>
    <h1>¡Gracias!</h1>
    <?php if ($ok === true): ?>
      <p class="ok"><b>Hemos recibido tu mensaje.</b></p>
      <p>Pronto nos pondremos en contacto contigo.</p>
    <?php elseif ($ok === false): ?>
      <p class="ko"><b>Tu mensaje no pudo enviarse.</b></p>
      <p>Por favor, inténtalo de nuevo o escríbenos a<br>
        <a href="mailto:info@velatstudio.com">info@velatstudio.com</a>
      </p>
    <?php else: ?>
      <p>Gracias por tu visita.</p>
    <?php endif; ?>
    <a class="btn" href="/index.html">Volver al inicio</a>
  </main>

  <?php include __DIR__.'/partials/footer.php'; ?>
</body>
</html>
