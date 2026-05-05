<?php
  // ——— SEO/OG de esta ficha ———
  $page_title = 'Neboeiro de Toubes — Alojamiento rural | VELAT';
  $page_desc  = 'Reforma parcial del Pazo de Toubes para alojamiento rural: veladuras de luz, materiales nobles y recorrido en secuencia.';
  $og_type    = 'article'; // clave para fichas
  $page_url   = 'https://www.velatstudio.com/proyectos/neboeiro-de-toubes/';
  $page_image = '/assets/proyectos/Neb_Toubes/og.jpg'; // 1200×630, <300 KB
  $active     = '';
?>
<!DOCTYPE html>
<html lang="es">
<head><?php include dirname(__DIR__, 2).'/partials/head.php'; ?></head>
<body>
<?php include dirname(__DIR__, 2).'/partials/header.php'; ?>
<main class="main--wide">
  <div class="title-bar">
    <a href="<?= $P ?>/proyectos.php" class="back" aria-label="Volver a Proyectos" title="Volver a Proyectos">

      <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="#111" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <polyline points="15 6 9 12 15 18" />
      </svg>
    </a>
    <h1>ALOJAMIENTO RURAL</h1>
  </div>

  <section class="carousel" aria-label="Galería de imágenes">
    <div class="track" id="track">
  <!-- N1 — bancos -->
  <div class="slide">
    <figure>
      <picture>
        <source type="image/avif" srcset="
          /assets/proyectos/Neb_Toubes/N1-bancos-960.avif 960w,
          /assets/proyectos/Neb_Toubes/N1-bancos-1440.avif 1440w,
          /assets/proyectos/Neb_Toubes/N1-bancos-1920.avif 1920w">
        <source type="image/webp" srcset="
          /assets/proyectos/Neb_Toubes/N1-bancos-960.webp 960w,
          /assets/proyectos/Neb_Toubes/N1-bancos-1440.webp 1440w,
          /assets/proyectos/Neb_Toubes/N1-bancos-1920.webp 1920w">
        <img src="/assets/proyectos/Neb_Toubes/N1-bancos.jpg"
             alt="Zona general de huéspedes con luz filtrada"
             loading="lazy" decoding="async"
             sizes="(max-width:768px) 100vw, 80vw">
      </picture>
      <figcaption><em>Zona general de huéspedes</em></figcaption>
    </figure>
  </div>

  <!-- N2 — entrada -->
  <div class="slide">
    <figure>
      <picture>
        <source type="image/avif" srcset="
          /assets/proyectos/Neb_Toubes/N2-entrada-960.avif 960w,
          /assets/proyectos/Neb_Toubes/N2-entrada-1440.avif 1440w,
          /assets/proyectos/Neb_Toubes/N2-entrada-1920.avif 1920w">
        <source type="image/webp" srcset="
          /assets/proyectos/Neb_Toubes/N2-entrada-960.webp 960w,
          /assets/proyectos/Neb_Toubes/N2-entrada-1440.webp 1440w,
          /assets/proyectos/Neb_Toubes/N2-entrada-1920.webp 1920w">
        <img src="/assets/proyectos/Neb_Toubes/N2-entrada.jpg"
             alt="Acceso a bodega y expositor"
             loading="lazy" decoding="async"
             sizes="(max-width:768px) 100vw, 80vw">
      </picture>
      <figcaption><em>Acceso a bodega y expositor</em></figcaption>
    </figure>
  </div>

  <!-- N3 — cocina -->
  <div class="slide">
    <figure>
      <picture>
        <source type="image/avif" srcset="
          /assets/proyectos/Neb_Toubes/N3-cocina-960.avif 960w,
          /assets/proyectos/Neb_Toubes/N3-cocina-1440.avif 1440w,
          /assets/proyectos/Neb_Toubes/N3-cocina-1920.avif 1920w">
        <source type="image/webp" srcset="
          /assets/proyectos/Neb_Toubes/N3-cocina-960.webp 960w,
          /assets/proyectos/Neb_Toubes/N3-cocina-1440.webp 1440w,
          /assets/proyectos/Neb_Toubes/N3-cocina-1920.webp 1920w">
        <img src="/assets/proyectos/Neb_Toubes/N3-cocina.jpg"
             alt="Cocina común con materiales cálidos"
             loading="lazy" decoding="async"
             sizes="(max-width:768px) 100vw, 80vw">
      </picture>
      <figcaption><em>Cocina común</em></figcaption>
    </figure>
  </div>

  <!-- N4 — lavadero -->
  <div class="slide">
    <figure>
      <picture>
        <source type="image/avif" srcset="
          /assets/proyectos/Neb_Toubes/N4-lavadero-960.avif 960w,
          /assets/proyectos/Neb_Toubes/N4-lavadero-1440.avif 1440w,
          /assets/proyectos/Neb_Toubes/N4-lavadero-1920.avif 1920w">
        <source type="image/webp" srcset="
          /assets/proyectos/Neb_Toubes/N4-lavadero-960.webp 960w,
          /assets/proyectos/Neb_Toubes/N4-lavadero-1440.webp 1440w,
          /assets/proyectos/Neb_Toubes/N4-lavadero-1920.webp 1920w">
        <img src="/assets/proyectos/Neb_Toubes/N4-lavadero.jpg"
             alt="Lavadero y baño con luz suave"
             loading="lazy" decoding="async"
             sizes="(max-width:768px) 100vw, 80vw">
      </picture>
      <figcaption><em>Lavadero y baño</em></figcaption>
    </figure>
  </div>

  <!-- N5 — detalle -->
  <div class="slide">
    <figure>
      <picture>
        <source type="image/avif" srcset="
          /assets/proyectos/Neb_Toubes/N5-detalle-960.avif 960w,
          /assets/proyectos/Neb_Toubes/N5-detalle-1440.avif 1440w,
          /assets/proyectos/Neb_Toubes/N5-detalle-1920.avif 1920w">
        <source type="image/webp" srcset="
          /assets/proyectos/Neb_Toubes/N5-detalle-960.webp 960w,
          /assets/proyectos/Neb_Toubes/N5-detalle-1440.webp 1440w,
          /assets/proyectos/Neb_Toubes/N5-detalle-1920.webp 1920w">
        <img src="/assets/proyectos/Neb_Toubes/N5-detalle.jpg"
             alt="Detalle material con vidrio y textil"
             loading="lazy" decoding="async"
             sizes="(max-width:768px) 100vw, 80vw">
      </picture>
      <figcaption><em>Detalle material</em></figcaption>
    </figure>
  </div>

  <!-- N6 — patio -->
  <div class="slide">
    <figure>
      <picture>
        <source type="image/avif" srcset="
          /assets/proyectos/Neb_Toubes/N6-patio-960.avif 960w,
          /assets/proyectos/Neb_Toubes/N6-patio-1440.avif 1440w,
          /assets/proyectos/Neb_Toubes/N6-patio-1920.avif 1920w">
        <source type="image/webp" srcset="
          /assets/proyectos/Neb_Toubes/N6-patio-960.webp 960w,
          /assets/proyectos/Neb_Toubes/N6-patio-1440.webp 1440w,
          /assets/proyectos/Neb_Toubes/N6-patio-1920.webp 1920w">
        <img src="/assets/proyectos/Neb_Toubes/N6-patio.jpg"
             alt="Patio y paisaje con vegetación"
             loading="lazy" decoding="async"
             sizes="(max-width:768px) 100vw, 80vw">
      </picture>
      <figcaption><em>Patio y paisaje</em></figcaption>
    </figure>
  </div>

  <!-- N7 — h1 -->
  <div class="slide">
    <figure>
      <picture>
        <source type="image/avif" srcset="
          /assets/proyectos/Neb_Toubes/N7-h1-960.avif 960w,
          /assets/proyectos/Neb_Toubes/N7-h1-1440.avif 1440w,
          /assets/proyectos/Neb_Toubes/N7-h1-1920.avif 1920w">
        <source type="image/webp" srcset="
          /assets/proyectos/Neb_Toubes/N7-h1-960.webp 960w,
          /assets/proyectos/Neb_Toubes/N7-h1-1440.webp 1440w,
          /assets/proyectos/Neb_Toubes/N7-h1-1920.webp 1920w">
        <img src="/assets/proyectos/Neb_Toubes/N7-h1.jpg"
             alt="Antesala de habitación en penumbra"
             loading="lazy" decoding="async"
             sizes="(max-width:768px) 100vw, 80vw">
      </picture>
      <figcaption><em>Acceso a habitación</em></figcaption>
    </figure>
  </div>

  <!-- N8 — h2 (PNG de origen) -->
  <div class="slide">
    <figure>
      <picture>
        <source type="image/avif" srcset="
          /assets/proyectos/Neb_Toubes/N8-h2-960.avif 960w,
          /assets/proyectos/Neb_Toubes/N8-h2-1440.avif 1440w,
          /assets/proyectos/Neb_Toubes/N8-h2-1920.avif 1920w">
        <source type="image/webp" srcset="
          /assets/proyectos/Neb_Toubes/N8-h2-960.webp 960w,
          /assets/proyectos/Neb_Toubes/N8-h2-1440.webp 1440w,
          /assets/proyectos/Neb_Toubes/N8-h2-1920.webp 1920w">
        <img src="/assets/proyectos/Neb_Toubes/N8-h2.png"
             alt="Habitación con filtros de luz"
             loading="lazy" decoding="async"
             sizes="(max-width:768px) 100vw, 80vw">
      </picture>
      <figcaption><em>Filtros de luz</em></figcaption>
    </figure>
  </div>

  <!-- N9 — h3 (PNG de origen) -->
  <div class="slide">
    <figure>
      <picture>
        <source type="image/avif" srcset="
          /assets/proyectos/Neb_Toubes/N9-h3-960.avif 960w,
          /assets/proyectos/Neb_Toubes/N9-h3-1440.avif 1440w,
          /assets/proyectos/Neb_Toubes/N9-h3-1920.avif 1920w">
        <source type="image/webp" srcset="
          /assets/proyectos/Neb_Toubes/N9-h3-960.webp 960w,
          /assets/proyectos/Neb_Toubes/N9-h3-1440.webp 1440w,
          /assets/proyectos/Neb_Toubes/N9-h3-1920.webp 1920w">
        <img src="/assets/proyectos/Neb_Toubes/N9-h3.png"
             alt="Habitación principal con luz cálida"
             loading="lazy" decoding="async"
             sizes="(max-width:768px) 100vw, 80vw">
      </picture>
      <figcaption><em>Habitación principal</em></figcaption>
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
    <div class="item"><div class="label">Año</div><div class="value">2025</div></div>
    <div class="item"><div class="label">Ubicación</div><div class="value">Cenlle</div></div>
    <div class="item"><div class="label">Cliente</div><div class="value">Neboeiro de Toubes</div></div>
    <div class="item"><div class="label">Tipo</div><div class="value">Hotel</div></div>
  </section>

  <section class="concepto">

<p>
El proyecto se trata de una intervención en una parte del pazo de Toubes, con el fin de habilitar un alojamiento rural. No obstante, en el programa también se contemplan espacios de taller, con el fin de vincularse a la artesanía y producto local. No actuar como un simple alojamiento, sino como un retiro que te vincula al territorio, que conecta y valora lo existente.
</p>

<p>
El recorrido comienza en la antigua bodega, donde se ubican los usos comunes del proyecto. Así como la niebla oculta el paisaje al inicio del día, el recorrido empieza en un lugar cerrado, con luz baja y filtrada y reflejos difusos, casi como caminar entre la niebla. Al ascender de este espacio, llegando al patio, el espacio se abre y el valle se muestra en su totalidad, así como lo hace la niebla al final de la mañana. La secuencia no busca un efecto, simplemente acompaña la manera en la que el lugar se ofrece.
</p>

<p>
Continuando con este concepto, las habitaciones adquieren este gesto. Antes de entrar en ellas hay un espacio previo de preparación, un espacio que oculta la propia habitación hasta que estés listo para entrar. Se guarda la sorpresa del espacio general así como el entorno hace con el espectador.
</p>

<p>
La materialidad acompaña ese tono. La luz siempre pasa a través de algo que la suaviza o expande, como la niebla encendida. Los tejidos atenúan las sombras y hacen que el día entre con calma. El vidrio acanalado deja percibir figuras que no se fijan del todo. El acero cepillado devuelve reflejos que nunca terminan de asentarse.
</p>

<p>
La madera de carballo y el granito, en cambio, son las anclas que guían este paisaje difuso, son los materiales que permanecen, al igual que ciertos elementos de la memoria de este pazo siguen nítidos, es la contraposición a la niebla.
</p>

<p>
Habitar este lugar implica entrar en esa secuencia lenta, prestar atención a cómo la luz cambia, a cómo el espacio se abre, a cómo el paisaje vuelve a aparecer. No es una experiencia inmediata. Ocurre de forma natural, como la niebla cuando se levanta.
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
// Utilidades para URLs absolutas
$scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
if (!empty($_SERVER['HTTP_X_FORWARDED_PROTO'])) { $scheme = $_SERVER['HTTP_X_FORWARDED_PROTO']; }
$host = $scheme . '://' . ($_SERVER['HTTP_HOST'] ?? 'www.velatstudio.com');
$abs  = fn($path) => (strpos($path,'http')===0) ? $path : $host . $path;

// Imágenes representativas (3–6). Usa las variantes reales que exportes.
$proj_images = [
  '/assets/proyectos/Neb_Toubes/Bancos-1440.webp',
  '/assets/proyectos/Neb_Toubes/Cocina-1440.webp',
  '/assets/proyectos/Neb_Toubes/Entrada-bodega-1440.webp',
  '/assets/proyectos/Neb_Toubes/Habitacion-1-1440.webp',
  '/assets/proyectos/Neb_Toubes/Habitacion-2-1440.webp',
  '/assets/proyectos/Neb_Toubes/Lavadero-1440.webp'
];

// Montamos el CreativeWork
$creative = [
  "@context"        => "https://schema.org",
  "@type"           => "CreativeWork",
  "name"            => "Neboeiro de Toubes — Alojamiento rural",
  "description"     => "Intervención en el Pazo de Toubes para habilitar un alojamiento rural con secuencias de luz filtrada y materialidad noble.",
  "creator"         => ["@type"=>"Organization","name"=>"VELAT Studio"],
  "datePublished"   => "2025-01-01", // año 2025 en formato ISO
  "keywords"        => ["interiorismo","alojamiento rural","Galicia","veladuras","niebla","granito","carballo"],
  "image"           => array_map($abs, $proj_images),
  "locationCreated" => [
    "@type"   => "Place",
    "address" => [
      "@type"           => "PostalAddress",
      "addressLocality" => "Cenlle",
      "addressRegion"   => "Ourense",
      "addressCountry"  => "ES"
    ]
  ],
  "additionalProperty" => [
    ["@type"=>"PropertyValue","name"=>"Cliente","value"=>"Neboeiro de Toubes"],
    ["@type"=>"PropertyValue","name"=>"Tipo","value"=>"Hotel"],
    ["@type"=>"PropertyValue","name"=>"Superficie","value"=>"XXX m²"],
    ["@type"=>"PropertyValue","name"=>"Estado","value"=>"En obra"]
  ]
];
?>
<script type="application/ld+json">
<?= json_encode($creative, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) ?>
</script>

</body>
</html>
