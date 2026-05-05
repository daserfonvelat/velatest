<?php
  $page_title = 'Aviso Legal — velat_.studio';
  $page_desc  = 'Información legal y condiciones de uso del sitio web de Velat Studio.';
  $active     = ''; // no marcamos ninguno en el footer
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <?php include __DIR__.'/partials/head.php'; ?>
  <style>
    main{max-width:860px;margin:100px auto 140px;padding:0 24px;}
    h1{margin:0 0 18px;letter-spacing:2px;font-size:1.18em;}
    h2{font-size:1.1em;margin:28px 0 10px;}
    p{margin:.6rem 0;line-height:1.7}
    ul{padding-left:1rem;margin:.6rem 0;}
    li{margin:.3rem 0;}
    .muted{color:var(--muted);font-size:.92em;}
  </style>
</head>
<body>
  <?php include __DIR__.'/partials/header.php'; ?>

  <main>
    <h1>AVISO LEGAL</h1>
    <p class="muted">Última actualización: 20/09/2025</p>

    <h2>1. Titular del sitio</h2>
    <p>Este sitio web es titularidad de <b>Daniel Serra Font</b> (Velat Studio).  
    Contacto: <a href="mailto:info@velatstudio.com">info@velatstudio.com</a>.</p>

    <h2>2. Condiciones de uso</h2>
    <p>El acceso y navegación por este sitio implica la aceptación de estas condiciones. No está permitida la utilización del sitio con fines ilícitos.</p>

    <h2>3. Propiedad intelectual</h2>
    <p>Salvo que se indique lo contrario, los contenidos (textos, imágenes, diseños) son propiedad del titular. Queda prohibida su reproducción sin autorización.</p>

    <h2>4. Enlaces</h2>
    <p>Este sitio puede enlazar a páginas de terceros. Velat no se responsabiliza de sus contenidos o políticas.</p>

    <h2>5. Responsabilidad</h2>
    <p>Se realizan esfuerzos razonables para mantener la información actualizada; no obstante, pueden existir errores u omisiones.</p>

    <h2>6. Protección de datos</h2>
    <p>Consulta la <a href="/privacidad.php">Política de Privacidad</a> para conocer cómo tratamos tus datos.</p>

    <h2>7. Contacto</h2>
    <p>Para cualquier cuestión legal, escríbenos a <a href="mailto:info@velatstudio.com">info@velatstudio.com</a>.</p>
  </main>

  <?php include __DIR__.'/partials/footer.php'; ?>
</body>
</html>
