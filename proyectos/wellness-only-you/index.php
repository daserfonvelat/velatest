<?php
  $page_title = 'Centro wellness — velat_.studio';
  $page_desc  = 'Wellness en Only You Valencia con acceso desde Poeta Querol.';
$og_type    = 'article'; // <- clave para fichas de proyecto
  $page_url   = 'https://www.velatstudio.com/proyectos/wellness-only-you/'; // ajusta si usas otra ruta
  $page_image = '/assets/proyectos/Well_OY/og.jpg'; // crea una imagen 1200×630 <300 KB
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
    <h1>CENTRO WELLNESS</h1>
  </div>

  <section class="carousel" aria-label="Galería de imágenes">
    <div class="track" id="track">
  <!-- W1 — acceso -->
  <div class="slide">
    <figure>
      <picture>
        <source type="image/avif" srcset="
          /assets/proyectos/Well_OY/W1-acceso-960.avif 960w,
          /assets/proyectos/Well_OY/W1-acceso-1440.avif 1440w,
          /assets/proyectos/Well_OY/W1-acceso-1920.avif 1920w">
        <source type="image/webp" srcset="
          /assets/proyectos/Well_OY/W1-acceso-960.webp 960w,
          /assets/proyectos/Well_OY/W1-acceso-1440.webp 1440w,
          /assets/proyectos/Well_OY/W1-acceso-1920.webp 1920w">
        <img src="/assets/proyectos/Well_OY/W1-acceso.jpg"
             alt="Acceso desde Poeta Querol"
             loading="lazy" decoding="async"
             sizes="(max-width:768px) 100vw, 80vw">
      </picture>
      <figcaption><em>Acceso desde Poeta Querol</em></figcaption>
    </figure>
  </div>

  <!-- W2 — general -->
  <div class="slide">
    <figure>
      <picture>
        <source type="image/avif" srcset="
          /assets/proyectos/Well_OY/W2-general-960.avif 960w,
          /assets/proyectos/Well_OY/W2-general-1440.avif 1440w,
          /assets/proyectos/Well_OY/W2-general-1920.avif 1920w">
        <source type="image/webp" srcset="
          /assets/proyectos/Well_OY/W2-general-960.webp 960w,
          /assets/proyectos/Well_OY/W2-general-1440.webp 1440w,
          /assets/proyectos/Well_OY/W2-general-1920.webp 1920w">
        <img src="/assets/proyectos/Well_OY/W2-general.jpg"
             alt="Vista general del espacio"
             loading="lazy" decoding="async"
             sizes="(max-width:768px) 100vw, 80vw">
      </picture>
      <figcaption><em>Vista general del espacio</em></figcaption>
    </figure>
  </div>

  <!-- W3 — barra (día) -->
  <div class="slide">
    <figure>
      <picture>
        <source type="image/avif" srcset="
          /assets/proyectos/Well_OY/W3-barrad-960.avif 960w,
          /assets/proyectos/Well_OY/W3-barrad-1440.avif 1440w,
          /assets/proyectos/Well_OY/W3-barrad-1920.avif 1920w">
        <source type="image/webp" srcset="
          /assets/proyectos/Well_OY/W3-barrad-960.webp 960w,
          /assets/proyectos/Well_OY/W3-barrad-1440.webp 1440w,
          /assets/proyectos/Well_OY/W3-barrad-1920.webp 1920w">
        <img src="/assets/proyectos/Well_OY/W3-barrad.jpg"
             alt="Barra — atmósfera diurna"
             loading="lazy" decoding="async"
             sizes="(max-width:768px) 100vw, 80vw">
      </picture>
      <figcaption><em>Barra — atmósfera diurna</em></figcaption>
    </figure>
  </div>

  <!-- W4 — barra (noche) -->
  <div class="slide">
    <figure>
      <picture>
        <source type="image/avif" srcset="
          /assets/proyectos/Well_OY/W4-barran-960.avif 960w,
          /assets/proyectos/Well_OY/W4-barran-1440.avif 1440w,
          /assets/proyectos/Well_OY/W4-barran-1920.avif 1920w">
        <source type="image/webp" srcset="
          /assets/proyectos/Well_OY/W4-barran-960.webp 960w,
          /assets/proyectos/Well_OY/W4-barran-1440.webp 1440w,
          /assets/proyectos/Well_OY/W4-barran-1920.webp 1920w">
        <img src="/assets/proyectos/Well_OY/W4-barran.jpg"
             alt="Barra — atmósfera nocturna"
             loading="lazy" decoding="async"
             sizes="(max-width:768px) 100vw, 80vw">
      </picture>
      <figcaption><em>Barra — atmósfera nocturna</em></figcaption>
    </figure>
  </div>

  <!-- W5 — sofás (noche) -->
  <div class="slide">
    <figure>
      <picture>
        <source type="image/avif" srcset="
          /assets/proyectos/Well_OY/W5-sofas-960.avif 960w,
          /assets/proyectos/Well_OY/W5-sofas-1440.avif 1440w,
          /assets/proyectos/Well_OY/W5-sofas-1920.avif 1920w">
        <source type="image/webp" srcset="
          /assets/proyectos/Well_OY/W5-sofas-960.webp 960w,
          /assets/proyectos/Well_OY/W5-sofas-1440.webp 1440w,
          /assets/proyectos/Well_OY/W5-sofas-1920.webp 1920w">
        <img src="/assets/proyectos/Well_OY/W5-sofas.jpg"
             alt="Zona de sofás — noche"
             loading="lazy" decoding="async"
             sizes="(max-width:768px) 100vw, 80vw">
      </picture>
      <figcaption><em>Zona de sofás — noche</em></figcaption>
    </figure>
  </div>

  <!-- W6 — entrada interior -->
  <div class="slide">
    <figure>
      <picture>
        <source type="image/avif" srcset="
          /assets/proyectos/Well_OY/W6-entrada-960.avif 960w,
          /assets/proyectos/Well_OY/W6-entrada-1440.avif 1440w,
          /assets/proyectos/Well_OY/W6-entrada-1920.avif 1920w">
        <source type="image/webp" srcset="
          /assets/proyectos/Well_OY/W6-entrada-960.webp 960w,
          /assets/proyectos/Well_OY/W6-entrada-1440.webp 1440w,
          /assets/proyectos/Well_OY/W6-entrada-1920.webp 1920w">
        <img src="/assets/proyectos/Well_OY/W6-entrada.jpg"
             alt="Entrada interior al wellness"
             loading="lazy" decoding="async"
             sizes="(max-width:768px) 100vw, 80vw">
      </picture>
      <figcaption><em>Entrada interior al wellness</em></figcaption>
    </figure>
  </div>

  <!-- W7 — estantería -->
  <div class="slide">
    <figure>
      <picture>
        <source type="image/avif" srcset="
          /assets/proyectos/Well_OY/W7-estanteria-960.avif 960w,
          /assets/proyectos/Well_OY/W7-estanteria-1440.avif 1440w,
          /assets/proyectos/Well_OY/W7-estanteria-1920.avif 1920w">
        <source type="image/webp" srcset="
          /assets/proyectos/Well_OY/W7-estanteria-960.webp 960w,
          /assets/proyectos/Well_OY/W7-estanteria-1440.webp 1440w,
          /assets/proyectos/Well_OY/W7-estanteria-1920.webp 1920w">
        <img src="/assets/proyectos/Well_OY/W7-estanteria.jpg"
             alt="Estantería y productos"
             loading="lazy" decoding="async"
             sizes="(max-width:768px) 100vw, 80vw">
      </picture>
      <figcaption><em>Estantería y productos</em></figcaption>
    </figure>
  </div>

  <!-- W8 — fachada día -->
  <div class="slide">
    <figure>
      <picture>
        <source type="image/avif" srcset="
          /assets/proyectos/Well_OY/W8-fachadad-960.avif 960w,
          /assets/proyectos/Well_OY/W8-fachadad-1440.avif 1440w,
          /assets/proyectos/Well_OY/W8-fachadad-1920.avif 1920w">
        <source type="image/webp" srcset="
          /assets/proyectos/Well_OY/W8-fachadad-960.webp 960w,
          /assets/proyectos/Well_OY/W8-fachadad-1440.webp 1440w,
          /assets/proyectos/Well_OY/W8-fachadad-1920.webp 1920w">
        <img src="/assets/proyectos/Well_OY/W8-fachadad.jpg"
             alt="Fachada — día"
             loading="lazy" decoding="async"
             sizes="(max-width:768px) 100vw, 80vw">
      </picture>
      <figcaption><em>Fachada — día</em></figcaption>
    </figure>
  </div>

  <!-- W9 — fachada noche -->
  <div class="slide">
    <figure>
      <picture>
        <source type="image/avif" srcset="
          /assets/proyectos/Well_OY/W9-fachadan-960.avif 960w,
          /assets/proyectos/Well_OY/W9-fachadan-1440.avif 1440w,
          /assets/proyectos/Well_OY/W9-fachadan-1920.avif 1920w">
        <source type="image/webp" srcset="
          /assets/proyectos/Well_OY/W9-fachadan-960.webp 960w,
          /assets/proyectos/Well_OY/W9-fachadan-1440.webp 1440w,
          /assets/proyectos/Well_OY/W9-fachadan-1920.webp 1920w">
        <img src="/assets/proyectos/Well_OY/W9-fachadan.jpg"
             alt="Fachada — noche"
             loading="lazy" decoding="async"
             sizes="(max-width:768px) 100vw, 80vw">
      </picture>
      <figcaption><em>Fachada — noche</em></figcaption>
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
    <div class="item"><div class="label">Ubicación</div><div class="value">Valencia</div></div>
    <div class="item"><div class="label">Cliente</div><div class="value">Only You Valencia</div></div>
    <div class="item"><div class="label">Tipo</div><div class="value">Bienestar</div></div>
  </section>

  <section class="concepto">
    <p>
      El proyecto nace de la necesidad de incorporar un espacio wellness dentro del Hotel Only You de Valencia, habilitando una nueva entrada desde la calle Poeta Querol y articulando una transición entre el ritmo urbano y el interior del hotel.
      Inspirado en el paisaje emocional de la Albufera, el espacio se transforma a lo largo del día igual que lo hace el propio paraje natural. La luz actúa como hilo conductor: durante la mañana, tonos cálidos y dorados inundan el espacio; al atardecer, el ambiente se torna intensamente naranja y envolvente, generando una experiencia inmersiva y cambiante.
      La chapa curvada remite al brillo del sol, el gotelé granate evoca el barro y la vegetación se reinterpreta mediante texturas, sombras y materiales nobles que anclan el proyecto al territorio.
      Un refugio de calma y transformación, guiado por la luz y las memorias del lugar.
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
