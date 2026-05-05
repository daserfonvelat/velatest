<?php
  $page_title = 'Cuestionario — velat_.studio';
  $page_desc  = 'Cuestionario sobre hábitos de vida.';
  $page_image   = '/assets/og/cuestionario.jpg'; // crea esta imagen (1200x630, <300 KB)
  $og_type      = 'website';                  // para servicios, "website"
  $twitter_site = '@velatstudio';             // si no tienes usuario, borra esta línea
  $active     = ''; // sin activo específico
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <?php include __DIR__.'/partials/head.php'; ?>
  <style>
    main{max-width:460px;margin:120px auto 140px;padding:0 8px;text-align:center}
    h1{font-size:1.1em;letter-spacing:2px;margin:0 0 28px}
    label{font-weight:700;display:block;margin:38px 0 16px}
    input[type="number"]{padding:8px 14px;border:1px solid #bbb;border-radius:6px;width:120px;text-align:center}
    button{margin-top:14px;background:#eee;border:0;border-radius:8px;padding:11px 38px;cursor:pointer;font:inherit}
    button:hover{background:#ddd}
    .error{display:none;color:#b70028;margin-top:12px}
    @media (max-width:700px){main{margin:90px auto 120px}}
  </style>
</head>
<body>
  <?php include __DIR__.'/partials/header.php'; ?>

  <main>
    <h1>ANTES DE EMPEZAR<br>¿CUÁNTOS AÑOS TIENES?</h1>

    <form id="edadForm" autocomplete="off">
      <label for="edad">Introduce tu edad</label>
      <input type="number" id="edad" name="edad" min="1" max="120" required>
      <br>
      <button type="submit">Continuar</button>
      <div class="error" id="errorEdad">Introduce una edad válida.</div>
    </form>
  </main>

  <?php include __DIR__.'/partials/footer.php'; ?>

  <script>
    (function(){
      const f = document.getElementById('edadForm');
      const input = document.getElementById('edad');
      const err = document.getElementById('errorEdad');
      f.addEventListener('submit', function(e){
        e.preventDefault();
        const edad = parseInt(input.value, 10);
        if (!edad || edad < 1 || edad > 120){
          err.style.display = 'block';
          return;
        }
        err.style.display = 'none';
        if (edad < 14) {
          window.location.href = 'cuestionario-infantil.php';
        } else {
          window.location.href = 'cuestionario.php';
        }
      });
    })();
  </script>
</body>
</html>
