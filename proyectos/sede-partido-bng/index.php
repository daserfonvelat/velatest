<?php
  $page_title = 'Sede principal partido BNG — velat_.studio';
  $page_desc  = 'Sede principal: salas de trabajo, despachos, sala de prensa y actos públicos.';
$og_type    = 'article'; // <- clave para fichas de proyecto
  $page_url   = 'https://www.velatstudio.com/proyectos/sede-partido-bng/'; // ajusta si usas otra ruta
  $page_image = '/assets/proyectos/BNG/og.jpg'; // crea una imagen 1200×630 <300 KB
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
    <h1>SEDE PRINCIPAL BNG</h1>
  </div>

  <section class="carousel" aria-label="Galería de imágenes">
    <div class="track" id="track">
  <!-- B1 — atril -->
  <div class="slide">
    <figure>
      <picture>
        <source type="image/avif" srcset="
          /assets/proyectos/BNG/B1-atril-960.avif 960w,
          /assets/proyectos/BNG/B1-atril-1440.avif 1440w,
          /assets/proyectos/BNG/B1-atril-1920.avif 1920w">
        <source type="image/webp" srcset="
          /assets/proyectos/BNG/B1-atril-960.webp 960w,
          /assets/proyectos/BNG/B1-atril-1440.webp 1440w,
          /assets/proyectos/BNG/B1-atril-1920.webp 1920w">
        <img src="/assets/proyectos/BNG/B1-atril.jpg"
             alt="Atril principal para conferencias"
             loading="lazy" decoding="async"
             sizes="(max-width:768px) 100vw, 80vw">
      </picture>
      <figcaption><em>Atril principal para conferencias</em></figcaption>
    </figure>
  </div>

  <!-- B2 — auditorio -->
  <div class="slide">
    <figure>
      <picture>
        <source type="image/avif" srcset="
          /assets/proyectos/BNG/B2-auditorio-960.avif 960w,
          /assets/proyectos/BNG/B2-auditorio-1440.avif 1440w,
          /assets/proyectos/BNG/B2-auditorio-1920.avif 1920w">
        <source type="image/webp" srcset="
          /assets/proyectos/BNG/B2-auditorio-960.webp 960w,
          /assets/proyectos/BNG/B2-auditorio-1440.webp 1440w,
          /assets/proyectos/BNG/B2-auditorio-1920.webp 1920w">
        <img src="/assets/proyectos/BNG/B2-auditorio.jpg"
             alt="Espacio principal de la sala de prensa"
             loading="lazy" decoding="async"
             sizes="(max-width:768px) 100vw, 80vw">
      </picture>
      <figcaption><em>Espacio principal de la sala de prensa</em></figcaption>
    </figure>
  </div>

  <!-- B3 — cortinas -->
  <div class="slide">
    <figure>
      <picture>
        <source type="image/avif" srcset="
          /assets/proyectos/BNG/B3-cortinas-960.avif 960w,
          /assets/proyectos/BNG/B3-cortinas-1440.avif 1440w,
          /assets/proyectos/BNG/B3-cortinas-1920.avif 1920w">
        <source type="image/webp" srcset="
          /assets/proyectos/BNG/B3-cortinas-960.webp 960w,
          /assets/proyectos/BNG/B3-cortinas-1440.webp 1440w,
          /assets/proyectos/BNG/B3-cortinas-1920.webp 1920w">
        <img src="/assets/proyectos/BNG/B3-cortinas.jpg"
             alt="Cortinas divisorias de sala"
             loading="lazy" decoding="async"
             sizes="(max-width:768px) 100vw, 80vw">
      </picture>
      <figcaption><em>Cortinas divisorias de sala</em></figcaption>
    </figure>
  </div>

  <!-- B4 — executiva1 -->
  <div class="slide">
    <figure>
      <picture>
        <source type="image/avif" srcset="
          /assets/proyectos/BNG/B4-executiva1-960.avif 960w,
          /assets/proyectos/BNG/B4-executiva1-1440.avif 1440w,
          /assets/proyectos/BNG/B4-executiva1-1920.avif 1920w">
        <source type="image/webp" srcset="
          /assets/proyectos/BNG/B4-executiva1-960.webp 960w,
          /assets/proyectos/BNG/B4-executiva1-1440.webp 1440w,
          /assets/proyectos/BNG/B4-executiva1-1920.webp 1920w">
        <img src="/assets/proyectos/BNG/B4-executiva1.jpg"
             alt="Sala ejecutiva — mesa principal"
             loading="lazy" decoding="async"
             sizes="(max-width:768px) 100vw, 80vw">
      </picture>
      <figcaption><em>Sala ejecutiva — mesa principal</em></figcaption>
    </figure>
  </div>

  <!-- B5 — executiva2 -->
  <div class="slide">
    <figure>
      <picture>
        <source type="image/avif" srcset="
          /assets/proyectos/BNG/B5-executiva2-960.avif 960w,
          /assets/proyectos/BNG/B5-executiva2-1440.avif 1440w,
          /assets/proyectos/BNG/B5-executiva2-1920.avif 1920w">
        <source type="image/webp" srcset="
          /assets/proyectos/BNG/B5-executiva2-960.webp 960w,
          /assets/proyectos/BNG/B5-executiva2-1440.webp 1440w,
          /assets/proyectos/BNG/B5-executiva2-1920.webp 1920w">
        <img src="/assets/proyectos/BNG/B5-executiva2.jpg"
             alt="Sala ejecutiva — vista secundaria"
             loading="lazy" decoding="async"
             sizes="(max-width:768px) 100vw, 80vw">
      </picture>
      <figcaption><em>Sala ejecutiva — vista secundaria</em></figcaption>
    </figure>
  </div>

  <!-- B6 — despacho -->
  <div class="slide">
    <figure>
      <picture>
        <source type="image/avif" srcset="
          /assets/proyectos/BNG/B6-despacho-960.avif 960w,
          /assets/proyectos/BNG/B6-despacho-1440.avif 1440w,
          /assets/proyectos/BNG/B6-despacho-1920.avif 1920w">
        <source type="image/webp" srcset="
          /assets/proyectos/BNG/B6-despacho-960.webp 960w,
          /assets/proyectos/BNG/B6-despacho-1440.webp 1440w,
          /assets/proyectos/BNG/B6-despacho-1920.webp 1920w">
        <img src="/assets/proyectos/BNG/B6-despacho.jpg"
             alt="Despacho de dirección"
             loading="lazy" decoding="async"
             sizes="(max-width:768px) 100vw, 80vw">
      </picture>
      <figcaption><em>Despacho de dirección</em></figcaption>
    </figure>
  </div>

  <!-- B7 — recepcion -->
  <div class="slide">
    <figure>
      <picture>
        <source type="image/avif" srcset="
          /assets/proyectos/BNG/B7-recepcion-960.avif 960w,
          /assets/proyectos/BNG/B7-recepcion-1440.avif 1440w,
          /assets/proyectos/BNG/B7-recepcion-1920.avif 1920w">
        <source type="image/webp" srcset="
          /assets/proyectos/BNG/B7-recepcion-960.webp 960w,
          /assets/proyectos/BNG/B7-recepcion-1440.webp 1440w,
          /assets/proyectos/BNG/B7-recepcion-1920.webp 1920w">
        <img src="/assets/proyectos/BNG/B7-recepcion.jpg"
             alt="Área de recepción"
             loading="lazy" decoding="async"
             sizes="(max-width:768px) 100vw, 80vw">
      </picture>
      <figcaption><em>Área de recepción</em></figcaption>
    </figure>
  </div>

  <!-- B8 — comun -->
  <div class="slide">
    <figure>
      <picture>
        <source type="image/avif" srcset="
          /assets/proyectos/BNG/B8-comun-960.avif 960w,
          /assets/proyectos/BNG/B8-comun-1440.avif 1440w,
          /assets/proyectos/BNG/B8-comun-1920.avif 1920w">
        <source type="image/webp" srcset="
          /assets/proyectos/BNG/B8-comun-960.webp 960w,
          /assets/proyectos/BNG/B8-comun-1440.webp 1440w,
          /assets/proyectos/BNG/B8-comun-1920.webp 1920w">
        <img src="/assets/proyectos/BNG/B8-comun.jpg"
             alt="Zona de trabajo común"
             loading="lazy" decoding="async"
             sizes="(max-width:768px) 100vw, 80vw">
      </picture>
      <figcaption><em>Zona de trabajo común</em></figcaption>
    </figure>
  </div>

  <!-- B9 — detalle -->
  <div class="slide">
    <figure>
      <picture>
        <source type="image/avif" srcset="
          /assets/proyectos/BNG/B9-detalle-960.avif 960w,
          /assets/proyectos/BNG/B9-detalle-1440.avif 1440w,
          /assets/proyectos/BNG/B9-detalle-1920.avif 1920w">
        <source type="image/webp" srcset="
          /assets/proyectos/BNG/B9-detalle-960.webp 960w,
          /assets/proyectos/BNG/B9-detalle-1440.webp 1440w,
          /assets/proyectos/BNG/B9-detalle-1920.webp 1920w">
        <img src="/assets/proyectos/BNG/B9-detalle.jpg"
             alt="Detalle material en zona de trabajo"
             loading="lazy" decoding="async"
             sizes="(max-width:768px) 100vw, 80vw">
      </picture>
      <figcaption><em>Detalle material en zona de trabajo</em></figcaption>
    </figure>
  </div>

  <!-- B10 — pasillo -->
  <div class="slide">
    <figure>
      <picture>
        <source type="image/avif" srcset="
          /assets/proyectos/BNG/B10-pasillo-960.avif 960w,
          /assets/proyectos/BNG/B10-pasillo-1440.avif 1440w,
          /assets/proyectos/BNG/B10-pasillo-1920.avif 1920w">
        <source type="image/webp" srcset="
          /assets/proyectos/BNG/B10-pasillo-960.webp 960w,
          /assets/proyectos/BNG/B10-pasillo-1440.webp 1440w,
          /assets/proyectos/BNG/B10-pasillo-1920.webp 1920w">
        <img src="/assets/proyectos/BNG/B10-pasillo.jpg"
             alt="Vista de acceso a despachos"
             loading="lazy" decoding="async"
             sizes="(max-width:768px) 100vw, 80vw">
      </picture>
      <figcaption><em>Vista de acceso a despachos</em></figcaption>
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
    <div class="item"><div class="label">Ubicación</div><div class="value">Santiago de Compostela</div></div>
    <div class="item"><div class="label">Cliente</div><div class="value">BNG</div></div>
    <div class="item"><div class="label">Tipo</div><div class="value">Oficina</div></div>
  </section>

  <section class="concepto">
    <p>
La nueva sede para el partido BNG, con una superficie de 500 m2, surge de la necesidad de crear un espacio propio para las actividades del partido: zonas de trabajo, despachos sectoriales, sala de prensa y área de actos públicos. A nivel espacial, el proyecto nace de la unión de tres bajos comerciales —entre ellos, la antigua sede— que conforman un complejo machihembrado estructural. Esta preexistencia genera un juego de diferentes volúmenes con distintas direcciones, condicionado por los zaguanes del edificio y otros elementos que interfieren en el espacio interior.<p>
La propuesta parte de un doble eje conceptual. Por un lado, las vanguardias artísticas del siglo XX —especialmente autores como Lissitzky o Kandinsky— y su intención de construir un lenguaje visual accesible, basado en formas y colores puros, que hablara directamente al pueblo. Esta influencia formal se traduce en composiciones geométricas y cromáticas que estructuran el espacio. Por otro, la figura de Castelao aporta una segunda capa simbólica, arraigada en la memoria y los materiales gallegos. Se integran elementos como maderas locales, textiles tradicionales, cerámicas y piedra, creando una convivencia entre modernidad gráfica y arraigo cultural. 
</p>
<p>
Lejos de ocultar estas interferencias espaciales, la propuesta aprovecha los volúmenes integrándolos en un doble eje conceptual. Por un lado, las vanguardias artísticas del siglo XX —especialmente autores como Lissitzky o Kandinsky— y su intención de construir un lenguaje visual accesible, basado en formas y colores puros, que hablara directamente al pueblo. Esta influencia formal se traduce en composiciones geométricas y cromáticas que abrazan los volúmenes existentes y estructuran el espacio. Por otro, la figura de Castelao aporta una segunda capa simbólica, arraigada en la memoria y los materiales gallegos. Se integran elementos como maderas locales, textiles tradicionales, cerámicas y piedra, creando una convivencia entre modernidad gráfica y arraigo cultural.
    </p>
<p>
El resultado es un espacio político que no solo representa la identidad visual del partido, sino también una síntesis entre lo universal y lo propio, entre la claridad comunicativa y la textura del territorio.    </p>
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

