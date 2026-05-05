<?php
  $page_title = 'Reforma de vivienda — velat_.studio';
  $page_desc  = 'Reforma de vivienda en Godelleta.';
$og_type    = 'article'; // <- clave para fichas de proyecto
  $page_url   = 'https://www.velatstudio.com/proyectos/vivienda-ximo/'; // ajusta si usas otra ruta
  $page_image = '/assets/proyectos/Gode/og.jpg'; // crea una imagen 1200×630 <300 KB
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
    <h1>REFORMA DE VIVIENDA</h1>
  </div>

  <section class="carousel" aria-label="Galería de imágenes">
  <div class="track" id="track">
  <!-- X1 — Pasillo -->
  <div class="slide">
    <figure>
      <picture>
        <source type="image/avif" srcset="
          /assets/proyectos/Gode/X1-pasillo-960.avif 960w,
          /assets/proyectos/Gode/X1-pasillo-1440.avif 1440w,
          /assets/proyectos/Gode/X1-pasillo-1920.avif 1920w">
        <source type="image/webp" srcset="
          /assets/proyectos/Gode/X1-pasillo-960.webp 960w,
          /assets/proyectos/Gode/X1-pasillo-1440.webp 1440w,
          /assets/proyectos/Gode/X1-pasillo-1920.webp 1920w">
        <img src="/assets/proyectos/Gode/X1-pasillo.jpg"
             alt="Pasillo — Reforma en Godelleta"
             loading="lazy" decoding="async"
             sizes="(max-width:768px) 100vw, 80vw">
      </picture>
      <figcaption><em>Pasillo</em></figcaption>
    </figure>
  </div>

  <!-- X2 — Salón -->
  <div class="slide">
    <figure>
      <picture>
        <source type="image/avif" srcset="
          /assets/proyectos/Gode/X2-salon-960.avif 960w,
          /assets/proyectos/Gode/X2-salon-1440.avif 1440w,
          /assets/proyectos/Gode/X2-salon-1920.avif 1920w">
        <source type="image/webp" srcset="
          /assets/proyectos/Gode/X2-salon-960.webp 960w,
          /assets/proyectos/Gode/X2-salon-1440.webp 1440w,
          /assets/proyectos/Gode/X2-salon-1920.webp 1920w">
        <img src="/assets/proyectos/Gode/X2-salon.jpg"
             alt="Salón — Reforma en Godelleta"
             loading="lazy" decoding="async"
             sizes="(max-width:768px) 100vw, 80vw">
      </picture>
      <figcaption><em>Salón</em></figcaption>
    </figure>
  </div>

  <!-- X3 — Cocina -->
  <div class="slide">
    <figure>
      <picture>
        <source type="image/avif" srcset="
          /assets/proyectos/Gode/X3-cocina-960.avif 960w,
          /assets/proyectos/Gode/X3-cocina-1440.avif 1440w,
          /assets/proyectos/Gode/X3-cocina-1920.avif 1920w">
        <source type="image/webp" srcset="
          /assets/proyectos/Gode/X3-cocina-960.webp 960w,
          /assets/proyectos/Gode/X3-cocina-1440.webp 1440w,
          /assets/proyectos/Gode/X3-cocina-1920.webp 1920w">
        <img src="/assets/proyectos/Gode/X3-cocina.jpg"
             alt="Cocina — Reforma en Godelleta"
             loading="lazy" decoding="async"
             sizes="(max-width:768px) 100vw, 80vw">
      </picture>
      <figcaption><em>Cocina</em></figcaption>
    </figure>
  </div>

  <!-- X4 — Aseo -->
  <div class="slide">
    <figure>
      <picture>
        <source type="image/avif" srcset="
          /assets/proyectos/Gode/X4-aseo-960.avif 960w,
          /assets/proyectos/Gode/X4-aseo-1440.avif 1440w,
          /assets/proyectos/Gode/X4-aseo-1920.avif 1920w">
        <source type="image/webp" srcset="
          /assets/proyectos/Gode/X4-aseo-960.webp 960w,
          /assets/proyectos/Gode/X4-aseo-1440.webp 1440w,
          /assets/proyectos/Gode/X4-aseo-1920.webp 1920w">
        <img src="/assets/proyectos/Gode/X4-aseo.jpg"
             alt="Aseo — Reforma en Godelleta"
             loading="lazy" decoding="async"
             sizes="(max-width:768px) 100vw, 80vw">
      </picture>
      <figcaption><em>Aseo</em></figcaption>
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
    <div class="item"><div class="label">Año</div><div class="value">2022</div></div>
    <div class="item"><div class="label">Ubicación</div><div class="value">Godelleta</div></div>
    <div class="item"><div class="label">Cliente</div><div class="value">Ximo</div></div>
    <div class="item"><div class="label">Tipo</div><div class="value">Vivienda</div></div>
  </section>

  <section class="concepto">
    <p>
      Reforma integral con atención en luz, recorridos y texturas.
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
</body>
</html>
