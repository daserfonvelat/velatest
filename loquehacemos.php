<?php
  $page_title   = 'Servicios — Arquitectura & Interiorismo | VELAT';
  $page_desc    = 'Del concepto al detalle: estrategia espacial, proyecto y dirección de obra.';
  $page_image   = '/assets/og/servicios.jpg'; 
  $og_type      = 'website';                 
  $twitter_site = '@velatstudio';            
  $active       = 'servicios';
?>
<!DOCTYPE html>
<html lang="es">
<head><?php include __DIR__.'/partials/head.php'; ?></head>
<body>
<?php include __DIR__.'/partials/header.php'; ?>

<main class="main--wide">
  <style>
    /* ——— LAYOUT SERVICIOS ——— */
    .services-layout {
      display: grid;
      grid-template-columns: 40% 1fr; /* Imagen 40% | Texto Resto */
      gap: 50px;
      margin-bottom: 100px;
    }

    /* ——— IMAGEN ATMÓSFERA ——— */
    .atmosphere-img {
      width: 100%;
      height: 80vh; /* Altura considerable */
      max-height: 700px;
      object-fit: cover;
      /* Filtro Velat: Blanco y negro contrastado */
      filter: grayscale(100%) contrast(1.1) brightness(0.95);
      transition: filter 0.6s ease;
      position: sticky;
      top: 80px;
    }
    .atmosphere-img:hover {
      filter: grayscale(0%) contrast(1);
    }

    /* ——— TEXTOS ——— */
    .manifesto-title {
      font-size: clamp(24px, 3vw, 36px);
      font-weight: 300;
      line-height: 1.3;
      margin-top: 0;
      margin-bottom: 32px;
      color: #111;
    }
    .text-block p {
      font-size: 16px;
      line-height: 1.6;
      color: #555;
      margin-bottom: 24px;
    }

    /* ——— CAJA DE SERVICIOS (GLASS) ——— */
    .services-box {
      margin-top: 40px;
      background: rgba(245, 245, 245, 0.6);
      border: 1px solid rgba(0,0,0,0.08);
      backdrop-filter: blur(10px);
      -webkit-backdrop-filter: blur(10px);
      padding: 32px;
    }
    .services-header {
      font-family: 'Courier New', monospace;
      font-size: 12px;
      text-transform: uppercase;
      color: #888;
      border-bottom: 1px solid #ddd;
      padding-bottom: 12px;
      margin-bottom: 20px;
      letter-spacing: 1px;
    }
    .services-list {
      list-style: none;
      padding: 0;
      margin: 0;
      display: grid;
      grid-template-columns: 1fr 1fr; /* Dos columnas de servicios */
      gap: 16px 32px;
    }
    .services-list li {
      font-size: 15px;
      color: #222;
      padding-left: 12px;
      border-left: 2px solid transparent;
      transition: all 0.2s;
      line-height: 1.4;
    }
    .services-list li:hover {
      border-left-color: #111;
      padding-left: 16px;
      color: #000;
      font-weight: 500;
    }

    /* ——— LINK FINAL ——— */
    .cta-link {
      display: inline-block;
      margin-top: 30px;
      font-weight: bold;
      text-decoration: none;
      color: #111;
      border-bottom: 1px solid #111;
      padding-bottom: 2px;
      transition: opacity 0.2s;
    }
    .cta-link:hover { opacity: 0.7; }

    /* ——— RESPONSIVE ——— */
    @media (max-width: 900px) {
      .services-layout { grid-template-columns: 1fr; gap: 30px; }
      .atmosphere-img { height: 300px; position: relative; top: 0; order: -1; }
      .services-list { grid-template-columns: 1fr; } /* 1 columna en móvil */
      .manifesto-title { font-size: 1.4em; }
    }
  </style>

  <h1 style="margin-bottom: 40px; letter-spacing: 2px;">LO QUE HACEMOS</h1>

  <section class="services-layout">
    
    <aside>
      <img src="/assets/proyectos/BNG/B3-cortinas-1440.webp" class="atmosphere-img" alt="Proceso creativo Velat">
      <div style="font-family:'Courier New', monospace; font-size:10px; color:#999; margin-top:8px;">
        > PROCESS_LAYER_01
      </div>
    </aside>

    <article>
      <div class="manifesto-title">
        Diseñamos espacios que interrumpen lo previsible para revelar lo intangible. Convertimos la tensión entre lo visible y lo sugerido en estrategia espacial.
      </div>

      <div class="text-block">
        <p>
          Acompañamos cada fase del proceso, desde el concepto abstracto hasta la ejecución material. Trabajamos de manera colaborativa con artesanos y equipos técnicos, garantizando que la intención original (el código fuente del proyecto) se mantenga viva en la obra construida.
        </p>
        <p>
          Operamos en proyectos de hostelería, hospitality, retail y espacios corporativos, donde el espacio no es solo un contenedor, sino un lenguaje de marca.
        </p>
      </div>

      <div class="services-box">
        <div class="services-header">:: CAPABILITIES / SERVICIOS</div>
        <ul class="services-list">
          <li>Interiorismo & Reforma</li>
          <li>Arquitectura</li>
          <li>Identidad de Marca</li>
          <li>Estrategia Espacial</li>
          <li>Experiencia de Usuario (UX)</li>
          <li>Dirección de Arte</li>
          <li>Consultoría Conceptual</li>
          <li>Diseño de Mobiliario</li>
          <li>Gestión de Obra</li>
        </ul>
      </div>

      <div class="text-block" style="margin-top: 30px;">
        <p>Lo más potente de un espacio no siempre está en lo que muestra, sino en lo que sugiere.</p>
        <a href="contacto.php" class="cta-link">> INICIAR PROYECTO</a>
      </div>

    </article>

  </section>
</main>

<?php include __DIR__.'/partials/footer.php'; ?>

</body>
</html>