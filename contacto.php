<!DOCTYPE html>
<html lang="es">
<head>
  <?php
    $page_title = 'Contacto – velat_.studio';
    $page_desc  = 'Cuéntanos tu idea. Empecemos.';
    include __DIR__.'/partials/head.php';
  ?>
</head>
<body>
  <?php include __DIR__.'/partials/header.php'; ?>

  <main>
    <h1>CONTACTO</h1>
    <div class="sub">
      Un mensaje puede ser el inicio de una transformación.<br>
      Si quieres compartir una idea, una duda o solo decir hola, estamos al otro lado.
    </div>

    <form action="<?= $ASSET_BASE ?? '' ?>/enviar_contacto.php" method="POST" autocomplete="off">
      <label for="nombre">Nombre</label>
      <input type="text" id="nombre" name="nombre" required>

      <label for="email">Email</label>
      <input type="email" id="email" name="email" required>

      <label for="mensaje">Mensaje</label>
      <textarea id="mensaje" name="mensaje" rows="4" required></textarea>

      <button type="submit">Enviar</button>
    </form>

    <div class="extra-mail">
      O, si lo prefieres, escríbenos a<br>
      <a href="mailto:info@velatstudio.com">info@velatstudio.com</a>
    </div>
  </main>

  <?php include __DIR__.'/partials/footer.php'; ?>
</body>
</html>
