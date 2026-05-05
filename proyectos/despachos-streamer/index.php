<?php
  $page_title = 'Despachos para streamer — velat_.studio';
  $page_desc  = 'Despachos para streamer en Igualada.';
  $og_type    = 'article';
  $page_url   = 'https://www.velatstudio.com/web/proyectos/despachos-streamer/'; // ojo: /web
  $page_image = '/web/assets/proyectos/Desp_Com/og.jpg';
  $active     = '';
?>
<!DOCTYPE html>
<html lang="es">
<head><?php include dirname(__DIR__, 2).'/partials/head.php'; ?></head>
<body>
<?php include dirname(__DIR__, 2).'/partials/header.php'; ?>

<main class="main--wide">
  <div class="title-bar">
    <a href="<?= $ASSET_BASE ?>/proyectos.php" class="back" aria-label="Volver a Proyectos" title="Volver a Proyectos">
      <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="#111" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <polyline points="15 6 9 12 15 18" />
      </svg>
    </a>
    <h1>DESPACHOS PARA STREAMER</h1>
  </div>


  <section class="carousel" aria-label="Galería de imágenes">
  <div class="track" id="track">
  <!-- C1 — vaumad (tarde) -->
  <div class="slide">
    <figure>
      <picture>
        <source type="image/avif" srcset="
          /assets/proyectos/Desp_Com/C1-vaumad-960.avif 960w,
          /assets/proyectos/Desp_Com/C1-vaumad-1440.avif 1440w,
          /assets/proyectos/Desp_Com/C1-vaumad-1920.avif 1920w">
        <source type="image/webp" srcset="
          /assets/proyectos/Desp_Com/C1-vaumad-960.webp 960w,
          /assets/proyectos/Desp_Com/C1-vaumad-1440.webp 1440w,
          /assets/proyectos/Desp_Com/C1-vaumad-1920.webp 1920w">
        <img src="/assets/proyectos/Desp_Com/C1-vaumad.jpg"
             alt="Vista general — luz de tarde"
             loading="lazy" decoding="async"
             sizes="(max-width:768px) 100vw, 80vw">
      </picture>
      <figcaption><em>Vista general — luz de tarde</em></figcaption>
    </figure>
  </div>

  <!-- C2 — vauman (mañana) -->
  <div class="slide">
    <figure>
      <picture>
        <source type="image/avif" srcset="
          /assets/proyectos/Desp_Com/C2-vauman-960.avif 960w,
          /assets/proyectos/Desp_Com/C2-vauman-1440.avif 1440w,
          /assets/proyectos/Desp_Com/C2-vauman-1920.avif 1920w">
        <source type="image/webp" srcset="
          /assets/proyectos/Desp_Com/C2-vauman-960.webp 960w,
          /assets/proyectos/Desp_Com/C2-vauman-1440.webp 1440w,
          /assets/proyectos/Desp_Com/C2-vauman-1920.webp 1920w">
        <img src="/assets/proyectos/Desp_Com/C2-vauman.jpg"
             alt="Vista general — luz de mañana"
             loading="lazy" decoding="async"
             sizes="(max-width:768px) 100vw, 80vw">
      </picture>
      <figcaption><em>Vista general — luz de mañana</em></figcaption>
    </figure>
  </div>

  <!-- C3 — carlesd (día) -->
  <div class="slide">
    <figure>
      <picture>
        <source type="image/avif" srcset="
          /assets/proyectos/Desp_Com/C3-carlesd-960.avif 960w,
          /assets/proyectos/Desp_Com/C3-carlesd-1440.avif 1440w,
          /assets/proyectos/Desp_Com/C3-carlesd-1920.avif 1920w">
        <source type="image/webp" srcset="
          /assets/proyectos/Desp_Com/C3-carlesd-960.webp 960w,
          /assets/proyectos/Desp_Com/C3-carlesd-1440.webp 1440w,
          /assets/proyectos/Desp_Com/C3-carlesd-1920.webp 1920w">
        <img src="/assets/proyectos/Desp_Com/C3-carlesd.jpg"
             alt="Despacho de Carles — luz de día"
             loading="lazy" decoding="async"
             sizes="(max-width:768px) 100vw, 80vw">
      </picture>
      <figcaption><em>Despacho de Carles — luz de día</em></figcaption>
    </figure>
  </div>

  <!-- C4 — carlesn (noche) -->
  <div class="slide">
    <figure>
      <picture>
        <source type="image/avif" srcset="
          /assets/proyectos/Desp_Com/C4-carlesn-960.avif 960w,
          /assets/proyectos/Desp_Com/C4-carlesn-1440.avif 1440w,
          /assets/proyectos/Desp_Com/C4-carlesn-1920.avif 1920w">
        <source type="image/webp" srcset="
          /assets/proyectos/Desp_Com/C4-carlesn-960.webp 960w,
          /assets/proyectos/Desp_Com/C4-carlesn-1440.webp 1440w,
          /assets/proyectos/Desp_Com/C4-carlesn-1920.webp 1920w">
        <img src="/assets/proyectos/Desp_Com/C4-carlesn.jpg"
             alt="Despacho de Carles — luz nocturna"
             loading="lazy" decoding="async"
             sizes="(max-width:768px) 100vw, 80vw">
      </picture>
      <figcaption><em>Despacho de Carles — luz nocturna</em></figcaption>
    </figure>
  </div>
</div>


  <div class="nav">
    <button class="btn" id="prev" aria-label="Anterior">‹</button>
    <button class="btn" id="next" aria-label="Siguiente">›</button>
  </div>
  <div class="dots" id="dots" aria-label="Paginación"></div>
</section>


  <section class="meta" aria-label="Metadatos del proyecto">
    <div class="item"><div class="label">Año</div><div class="value">2024</div></div>
    <div class="item"><div class="label">Ubicación</div><div class="value">Igualada</div></div>
    <div class="item"><div class="label">Cliente</div><div class="value">Melanie y Carles</div></div>
    <div class="item"><div class="label">Tipo</div><div class="value">Vivienda</div></div>
  </section>

  <section class="concepto">
    <p>
      Diseño de espacios de trabajo y stream con control lumínico, acústico y soluciones flexibles.
    </p>
  </section>
</main>

<?php include dirname(__DIR__, 2).'/partials/footer.php'; ?>
<script>
(function(){
  const track = document.getElementById('track');
  const slides = Array.from(track.querySelectorAll('.slide'));
  const prev = document.getElementById('prev');
  const next = document.getElementById('next');
  if (!track || !slides.length || !prev || !next) return;
  let i = 0;
  function update(){ track.style.transform = `translateX(-${i*100}%)`; }
  function go(d){ i = (i + d + slides.length) % slides.length; update(); }
  prev.addEventListener('click', ()=>go(-1));
  next.addEventListener('click', ()=>go(1));
  document.addEventListener('keydown', e=>{
    if(e.key==='ArrowLeft') go(-1);
    if(e.key==='ArrowRight') go(1);
  });
  let startX=null;
  track.addEventListener('touchstart', e=>{startX=e.touches[0].clientX;},{passive:true});
  track.addEventListener('touchend', e=>{
    if(startX==null) return;
    const dx=e.changedTouches[0].clientX-startX;
    if(Math.abs(dx)>40) go(dx<0?1:-1);
    startX=null;
  },{passive:true});
  update();
})();
</script>
<?php
// Utilidad para URLs absolutas
$scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
if (!empty($_SERVER['HTTP_X_FORWARDED_PROTO'])) { $scheme = $_SERVER['HTTP_X_FORWARDED_PROTO']; }
$host = $scheme . '://' . ($_SERVER['HTTP_HOST'] ?? 'www.velatstudio.com');
$abs  = fn($path) => (strpos($path,'http')===0) ? $path : $host . $path;

// === Variables de la ficha (rellénalas con lo que ya muestras en la página) ===
$proj_name        = 'Despachos para streamer';
$proj_desc        = 'Diseño de espacios de trabajo y stream con control lumínico, acústico y soluciones flexibles.';
$proj_location    = 'Igualada';
$proj_country     = 'ES';
$proj_year        = '2024-01-01'; // ISO (aaaa-mm-dd). Si no tienes día exacto, usa 2024-01-01.
$proj_keywords    = ['interiorismo','despachos','streaming','acústica','iluminación'];
$proj_client      = 'Melanie y Carles';
$proj_type        = 'Vivienda';
$proj_surface     = null; // ej. '85 m²' si lo quieres mostrar
$proj_status      = 'Completado'; // o 'En obra', etc.

// Imágenes representativas (mejor 3-6). Usa URLs ABSOLUTAS.
$proj_images = [
  '/assets/proyectos/Desp_Com/comarca-1440.webp',
  '/assets/proyectos/Desp_Com/Despacho1_3-1440.webp',
  '/assets/proyectos/Desp_Com/Despacho2_1-1440.webp',
  '/assets/proyectos/Desp_Com/Despacho2_3-1440.webp'
];

// Montamos CreativeWork
$creative = [
  "@context"        => "https://schema.org",
  "@type"           => "CreativeWork",
  "name"            => $proj_name,
  "description"     => $proj_desc,
  "creator"         => ["@type"=>"Organization","name"=>"VELAT Studio"],
  "datePublished"   => $proj_year,
  "keywords"        => $proj_keywords,
  "image"           => array_map($abs, $proj_images),
  "locationCreated" => [
    "@type"   => "Place",
    "address" => [
      "@type"            => "PostalAddress",
      "addressLocality"  => $proj_location,
      "addressCountry"   => $proj_country
    ]
  ],
  "additionalProperty" => array_values(array_filter([
    $proj_client  ? ["@type"=>"PropertyValue","name"=>"Cliente","value"=>$proj_client] : null,
    $proj_type    ? ["@type"=>"PropertyValue","name"=>"Tipo","value"=>$proj_type]     : null,
    $proj_surface ? ["@type"=>"PropertyValue","name"=>"Superficie","value"=>$proj_surface] : null,
    $proj_status  ? ["@type"=>"PropertyValue","name"=>"Estado","value"=>$proj_status] : null
  ]))
];
?>
<script type="application/ld+json">
<?= json_encode($creative, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE) ?>
</script>

</body>
</html>
