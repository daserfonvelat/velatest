<?php
  $page_title = 'Patio de eventos — velat_.studio';
  $page_desc  = 'Habilitación de patio interior para eventos invernales en Mislata.';
$og_type    = 'article'; // <- clave para fichas de proyecto
  $page_url   = 'https://www.velatstudio.com/proyectos/so-terrat/'; // ajusta si usas otra ruta
  $page_image = '/assets/proyectos/Soterrat/og.jpg'; // crea una imagen 1200×630 <300 KB
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
    <h1>PATIO DE EVENTOS</h1>
  </div>

  <section class="carousel" aria-label="Galería de imágenes">
    <div class="track" id="track">
  <!-- S1 — atardecer -->
  <div class="slide">
    <figure>
      <picture>
        <source type="image/avif" srcset="
          /assets/proyectos/Soterrat/S1-atardecer-960.avif 960w,
          /assets/proyectos/Soterrat/S1-atardecer-1440.avif 1440w,
          /assets/proyectos/Soterrat/S1-atardecer-1920.avif 1920w">
        <source type="image/webp" srcset="
          /assets/proyectos/Soterrat/S1-atardecer-960.webp 960w,
          /assets/proyectos/Soterrat/S1-atardecer-1440.webp 1440w,
          /assets/proyectos/Soterrat/S1-atardecer-1920.webp 1920w">
        <img src="/assets/proyectos/Soterrat/S1-atardecer.jpg"
             alt="Texturas del lateral del escenario al atardecer"
             loading="lazy" decoding="async"
             sizes="(max-width:768px) 100vw, 80vw">
      </picture>
      <figcaption><em>Texturas del lateral del escenario al atardecer</em></figcaption>
    </figure>
  </div>

  <!-- S2 — día -->
  <div class="slide">
    <figure>
      <picture>
        <source type="image/avif" srcset="
          /assets/proyectos/Soterrat/S2-dia-960.avif 960w,
          /assets/proyectos/Soterrat/S2-dia-1440.avif 1440w,
          /assets/proyectos/Soterrat/S2-dia-1920.avif 1920w">
        <source type="image/webp" srcset="
          /assets/proyectos/Soterrat/S2-dia-960.webp 960w,
          /assets/proyectos/Soterrat/S2-dia-1440.webp 1440w,
          /assets/proyectos/Soterrat/S2-dia-1920.webp 1920w">
        <img src="/assets/proyectos/Soterrat/S2-dia.jpg"
             alt="Vista del frontal del escenario"
             loading="lazy" decoding="async"
             sizes="(max-width:768px) 100vw, 80vw">
      </picture>
      <figcaption><em>Vista del frontal del escenario</em></figcaption>
    </figure>
  </div>

  <!-- S3 — lateral -->
  <div class="slide">
    <figure>
      <picture>
        <source type="image/avif" srcset="
          /assets/proyectos/Soterrat/S3-lateral-960.avif 960w,
          /assets/proyectos/Soterrat/S3-lateral-1440.avif 1440w,
          /assets/proyectos/Soterrat/S3-lateral-1920.avif 1920w">
        <source type="image/webp" srcset="
          /assets/proyectos/Soterrat/S3-lateral-960.webp 960w,
          /assets/proyectos/Soterrat/S3-lateral-1440.webp 1440w,
          /assets/proyectos/Soterrat/S3-lateral-1920.webp 1920w">
        <img src="/assets/proyectos/Soterrat/S3-lateral.jpg"
             alt="Lateral del patio"
             loading="lazy" decoding="async"
             sizes="(max-width:768px) 100vw, 80vw">
      </picture>
      <figcaption><em>Lateral del patio</em></figcaption>
    </figure>
  </div>

  <!-- S4 — noche -->
  <div class="slide">
    <figure>
      <picture>
        <source type="image/avif" srcset="
          /assets/proyectos/Soterrat/S4-noche-960.avif 960w,
          /assets/proyectos/Soterrat/S4-noche-1440.avif 1440w,
          /assets/proyectos/Soterrat/S4-noche-1920.avif 1920w">
        <source type="image/webp" srcset="
          /assets/proyectos/Soterrat/S4-noche-960.webp 960w,
          /assets/proyectos/Soterrat/S4-noche-1440.webp 1440w,
          /assets/proyectos/Soterrat/S4-noche-1920.webp 1920w">
        <img src="/assets/proyectos/Soterrat/S4-noche.jpg"
             alt="Vista nocturna del escenario"
             loading="lazy" decoding="async"
             sizes="(max-width:768px) 100vw, 80vw">
      </picture>
      <figcaption><em>Vista nocturna del escenario</em></figcaption>
    </figure>
  </div>

  <!-- S5 — evento -->
  <div class="slide">
    <figure>
      <picture>
        <source type="image/avif" srcset="
          /assets/proyectos/Soterrat/S5-evento-960.avif 960w,
          /assets/proyectos/Soterrat/S5-evento-1440.avif 1440w,
          /assets/proyectos/Soterrat/S5-evento-1920.avif 1920w">
        <source type="image/webp" srcset="
          /assets/proyectos/Soterrat/S5-evento-960.webp 960w,
          /assets/proyectos/Soterrat/S5-evento-1440.webp 1440w,
          /assets/proyectos/Soterrat/S5-evento-1920.webp 1920w">
        <img src="/assets/proyectos/Soterrat/S5-evento.jpg"
             alt="Evento nocturno en el patio"
             loading="lazy" decoding="async"
             sizes="(max-width:768px) 100vw, 80vw">
      </picture>
      <figcaption><em>Evento nocturno en el patio</em></figcaption>
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
    <div class="item"><div class="label">Año</div><div class="value">2023</div></div>
    <div class="item"><div class="label">Ubicación</div><div class="value">Mislata</div></div>
    <div class="item"><div class="label">Cliente</div><div class="value">Ayuntamiento de Mislata</div></div>
    <div class="item"><div class="label">Tipo</div><div class="value">Otros</div></div>
  </section>

  <section class="concepto">
    <p>
      El proyecto parte de la necesidad de habilitar un patio interior para eventos invernales. 
</p>
<p>
La intervención toma como referencia la obra del artista Miquel Navarro, especialmente su exploración de los volúmenes y su diálogo con la luz. Inspirándonos en sus ciudades miquelíticas y en los colores tierra de su escultura, se diseña una celosía de placas de terracota que, con sus inclinaciones, proyecta sombras cambiantes a lo largo del día. 
</p>
<p>
La plantación lateral de cactus y el juego lumínico que revela el símbolo del evento completan este homenaje sutil a la identidad cultural de Miquel y, por tanto, de Mislata.
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
