<?php
  $page_title = 'Salón de belleza — velat_.studio';
  $page_desc  = 'Proyecto de interiorismo para salón de belleza GLOW.';
  $og_type    = 'article'; // <- clave para fichas de proyecto
  $page_url   = 'https://www.velatstudio.com/proyectos/salon-belleza-glow/'; // ajusta si usas otra ruta
  $page_image = '/assets/proyectos/Glow/og.jpg'; // crea una imagen 1200×630 <300 KB
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
    <h1>SALÓN DE BELLEZA</h1>
  </div>

  <section class="carousel" aria-label="Galería de imágenes">
<div class="track" id="track">
  <!-- G1 — general -->
  <div class="slide">
    <figure>
      <picture>
        <source type="image/avif" srcset="
          /assets/proyectos/Glow/G1-general-960.avif 960w,
          /assets/proyectos/Glow/G1-general-1440.avif 1440w,
          /assets/proyectos/Glow/G1-general-1920.avif 1920w">
        <source type="image/webp" srcset="
          /assets/proyectos/Glow/G1-general-960.webp 960w,
          /assets/proyectos/Glow/G1-general-1440.webp 1440w,
          /assets/proyectos/Glow/G1-general-1920.webp 1920w">
        <img src="/assets/proyectos/Glow/G1-general.jpg"
             alt="Vista general del salón GLOW"
             loading="lazy" decoding="async"
             sizes="(max-width:768px) 100vw, 80vw">
      </picture>
      <figcaption><em>Vista general del salón</em></figcaption>
    </figure>
  </div>

  <!-- G2 — fachada -->
  <div class="slide">
    <figure>
      <picture>
        <source type="image/avif" srcset="
          /assets/proyectos/Glow/G2-fachada-960.avif 960w,
          /assets/proyectos/Glow/G2-fachada-1440.avif 1440w,
          /assets/proyectos/Glow/G2-fachada-1920.avif 1920w">
        <source type="image/webp" srcset="
          /assets/proyectos/Glow/G2-fachada-960.webp 960w,
          /assets/proyectos/Glow/G2-fachada-1440.webp 1440w,
          /assets/proyectos/Glow/G2-fachada-1920.webp 1920w">
        <img src="/assets/proyectos/Glow/G2-fachada.jpg"
             alt="Fachada y acceso"
             loading="lazy" decoding="async"
             sizes="(max-width:768px) 100vw, 80vw">
      </picture>
      <figcaption><em>Fachada y acceso</em></figcaption>
    </figure>
  </div>

  <!-- G3 — recepción -->
  <div class="slide">
    <figure>
      <picture>
        <source type="image/avif" srcset="
          /assets/proyectos/Glow/G3-recepcion-960.avif 960w,
          /assets/proyectos/Glow/G3-recepcion-1440.avif 1440w,
          /assets/proyectos/Glow/G3-recepcion-1920.avif 1920w">
        <source type="image/webp" srcset="
          /assets/proyectos/Glow/G3-recepcion-960.webp 960w,
          /assets/proyectos/Glow/G3-recepcion-1440.webp 1440w,
          /assets/proyectos/Glow/G3-recepcion-1920.webp 1920w">
        <img src="/assets/proyectos/Glow/G3-recepcion.jpg"
             alt="Recepción y sala de espera"
             loading="lazy" decoding="async"
             sizes="(max-width:768px) 100vw, 80vw">
      </picture>
      <figcaption><em>Recepción y sala de espera</em></figcaption>
    </figure>
  </div>

  <!-- G4 — tratamiento -->
  <div class="slide">
    <figure>
      <picture>
        <source type="image/avif" srcset="
          /assets/proyectos/Glow/G4-tratamiento-960.avif 960w,
          /assets/proyectos/Glow/G4-tratamiento-1440.avif 1440w,
          /assets/proyectos/Glow/G4-tratamiento-1920.avif 1920w">
        <source type="image/webp" srcset="
          /assets/proyectos/Glow/G4-tratamiento-960.webp 960w,
          /assets/proyectos/Glow/G4-tratamiento-1440.webp 1440w,
          /assets/proyectos/Glow/G4-tratamiento-1920.webp 1920w">
        <img src="/assets/proyectos/Glow/G4-tratamiento.jpg"
             alt="Cabina de tratamiento con luz filtrada"
             loading="lazy" decoding="async"
             sizes="(max-width:768px) 100vw, 80vw">
      </picture>
      <figcaption><em>Cabina de tratamiento</em></figcaption>
    </figure>
  </div>

  <!-- G5 — pasillo -->
  <div class="slide">
    <figure>
      <picture>
        <source type="image/avif" srcset="
          /assets/proyectos/Glow/G5-pasillo-960.avif 960w,
          /assets/proyectos/Glow/G5-pasillo-1440.avif 1440w,
          /assets/proyectos/Glow/G5-pasillo-1920.avif 1920w">
        <source type="image/webp" srcset="
          /assets/proyectos/Glow/G5-pasillo-960.webp 960w,
          /assets/proyectos/Glow/G5-pasillo-1440.webp 1440w,
          /assets/proyectos/Glow/G5-pasillo-1920.webp 1920w">
        <img src="/assets/proyectos/Glow/G5-pasillo.jpg"
             alt="Pasillo y cabinas"
             loading="lazy" decoding="async"
             sizes="(max-width:768px) 100vw, 80vw">
      </picture>
      <figcaption><em>Pasillo y cabinas</em></figcaption>
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
    <div class="item"><div class="label">Ubicación</div><div class="value">Moncada</div></div>
    <div class="item"><div class="label">Cliente</div><div class="value">Glow</div></div>
    <div class="item"><div class="label">Tipo</div><div class="value">Bienestar</div></div>
  </section>

  <section class="concepto">
    <p>
El proyecto para Glow se concibe a partir de la premisa de que la clienta es una diosa del futuro. Bajo esa idea, el salón se concibe como un templo contemporáneo, un lugar donde la belleza se ritualiza a través del espacio, la luz y la materia.
</p>

<p>
La planta, estrecha y longitudinal, se organiza como el espacio central de un templo. Las cabinas de tratamiento se disponen a ambos lados, delimitadas por cortinas de lino iluminadas arriba y abajo, que filtran la luz cálida y densifican la atmósfera, como si el aire estuviera cargado de polvo suspendido. Al igual que en las vidrieras de un templo, la luz se hace casi palpable. En el eje principal se ubica un gran espejo que funciona como el altar, donde culmina el recorrido de la persona que ha recibido el tratamiento, testigo de su propia transformación.
</p>

<p>
Los tonos ocres y tostados de las paredes evocan la huella del tiempo; los destellos dorados y cobrizos, recuerdan a la abundancia de los templos; mientras que los tonos azul eléctrico y turquesa, junto con la iluminación blanca y lineal, introducen una energía casi tecnológica, como si una civilización avanzada hubiese habitado las ruinas de un templo antiguo. El mobiliario, pesado y monolítico, refuerza esa idea de permanencia, mientras el suelo de terrazo existente actúa como base neutra que unifica todo el conjunto.
</p>

<p>
Al fondo del espacio, una estancia con iluminación de un tono azul intenso interrumpe la secuencia y señala el paso a la zona técnica, como si se tratara del acceso a una nave del futuro. En el centro del local, separando las cabinas y la sala de espera, dos aparadores de vidrio acanalado y color azul metálico guardan los equipos de desinfección, integrando la precisión y la tecnología en el mismo lenguaje ritual del proyecto.
</p>

<p>
La experiencia de usuario acompaña al concepto en su recorrido. La persona que recibe el tratamiento entra sin ver el altar y avanza entre luces filtradas y reflejos. Al acabar, continuando el recorrido de vuelta, se encuentra de frente con su propia imagen, culminando con su paso de “mortal” a “diosa”. El diseño interior convierte ese gesto en una divinización, dotando al proceso del tratamiento de un carisma casi ritual.
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
