<?php
  // ——— SEO/OG ———
  $page_title   = 'Proyectos — velat_.studio';
  $page_desc    = 'Selección de proyectos: hostelería, oficina, hotel, bienestar y otros.';
  $page_image   = '/web/assets/og/proyectos.jpg'; // 1200x630, <300 KB
  $og_type      = 'website';
  $twitter_site = '@velatstudio';
  $active       = 'proyectos';

  // ——— Catálogo (edítalo aquí) ———
  // carpeta => subcarpeta dentro de /web/assets/proyectos/
  // img_base => nombre base del thumbnail (existen -960/-1440.avif/.webp y .jpg fallback)
  $projects = [
    [
      'slug'       => 'salon-belleza-glow',
      'carpeta'    => 'Glow',
      'img_base'   => 'G1-general',
      'titulo'     => 'SALÓN DE BELLEZA',
      'cliente'    => 'Glow',
      'ubicacion'  => 'MONCADA',
      'tipo'       => 'BIENESTAR',
      'tags'       => 'bienestar',
      'year'       => 2022,
      'alt'        => 'Salón de belleza GLOW'
    ],
    [
      'slug'       => 'despachos-streamer',
      'carpeta'    => 'Desp_Com',
      'img_base'   => 'C1-vaumad',
      'titulo'     => 'DESPACHOS PARA STREAMER',
      'cliente'    => 'Melanie y Carles',
      'ubicacion'  => 'IGUALADA',
      'tipo'       => 'VIVIENDA',
      'tags'       => 'vivienda',
      'year'       => 2024,
      'alt'        => 'Despachos para streamer'
    ],
    [
      'slug'       => 'sede-partido-bng',
      'carpeta'    => 'BNG',
      'img_base'   => 'B2-auditorio',
      'titulo'     => 'SEDE PRINCIPAL',
      'cliente'    => 'BNG',
      'ubicacion'  => 'SANTIAGO DE COMPOSTELA',
      'tipo'       => 'OFICINA',
      'tags'       => 'oficina',
      'year'       => 2025,
      'alt'        => 'Sede principal BNG'
    ],
    [
      'slug'       => 'wellness-only-you',
      'carpeta'    => 'Well_OY',
      'img_base'   => 'W1-acceso',
      'titulo'     => 'CENTRO WELLNESS',
      'cliente'    => 'Only You Valencia',
      'ubicacion'  => 'VALENCIA',
      'tipo'       => 'BIENESTAR',
      'tags'       => 'bienestar',
      'year'       => 2025,
      'alt'        => 'Wellness Only You Valencia'
    ],
    [
      'slug'       => 'neboeiro-de-toubes',
      'carpeta'    => 'Neb_Toubes',
      'img_base'   => 'N4-lavadero',
      'titulo'     => 'ALOJAMIENTO RURAL',
      'cliente'    => 'Neboeiro de Toubes',
      'ubicacion'  => 'CENLLE',
      'tipo'       => 'HOTEL',
      'tags'       => 'hotel',
      'year'       => 2025,
      'alt'        => 'Alojamiento rural Neboeiro de Toubes'
    ],
    [
      'slug'       => 'so-terrat',
      'carpeta'    => 'Soterrat',
      'img_base'   => 'S1-atardecer',
      'titulo'     => 'SO TERRAT',
      'cliente'    => 'Ayuntamiento de Mislata',
      'ubicacion'  => 'MISLATA',
      'tipo'       => 'OTROS',
      'tags'       => 'otros',
      'year'       => 2023,
      'alt'        => 'Patio de eventos So Terrat'
    ],
    [
      'slug'       => 'vivienda-ximo',
      'carpeta'    => 'Gode',
      'img_base'   => 'X1-pasillo',
      'titulo'     => 'REFORMA DE VIVIENDA',
      'cliente'    => 'Ximo',
      'ubicacion'  => 'GODELLETA',
      'tipo'       => 'VIVIENDA',
      'tags'       => 'vivienda',
      'year'       => 2022,
      'alt'        => 'Reforma de vivienda en Godelleta'
    ],
  ];
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <?php include __DIR__.'/partials/head.php'; ?>
  <style>
    /* ======= LAYOUT DE ESTA PÁGINA ======= */
    main{
      width:100%; max-width:1200px;
      margin:100px auto 140px; padding:0 24px;
    }
    h1{ margin:0 0 6px 0; letter-spacing:2px; font-size:1.2rem; }
    .sub{ color:var(--muted); margin-bottom:18px; }
    /* Filtros */
    .filtros{ display:flex; flex-wrap:wrap; gap:8px; align-items:center; margin:10px 0 16px; }
    .chip{
      border:1px solid var(--line); background:var(--chip); color:#111;
      padding:6px 12px; border-radius:999px; font-size:.95em; cursor:pointer; user-select:none;
      transition:background .15s, color .15s, border-color .15s, transform .15s;
    }
    .chip:hover{ background:var(--chip-h); transform:translateY(-1px); }
    .chip[data-active="true"]{ background:#111; color:#fff; border-color:#111; }
    /* GRID */
    .grid{ display:grid; grid-template-columns:repeat(12,minmax(0,1fr)); gap:24px; grid-auto-flow:dense; }
    .card{ position:relative; background:transparent; border:0; border-radius:0; overflow:hidden; cursor:pointer; }
    .card > a{ display:block; position:relative; aspect-ratio:4/3; background:#e9e9e9; color:inherit; text-decoration:none; }
    .card picture, .card img{ position:absolute; inset:0; width:100%; height:100%; }
    .card img{ object-fit:cover; object-position:center; display:block; }
    .card-body{
      position:absolute; inset:0; display:flex; flex-direction:column; align-items:center; justify-content:center;
      text-align:center; padding:12px; background:rgba(0,0,0,.42); opacity:0; transition: opacity .45s ease;
    }
    .card:hover .card-body{ opacity:1; }
    .title{ color:#fff; font-weight:700; font-size:1.9em; letter-spacing:.5px; margin:0; }
    .cliente{ color:#fff; font-weight:400; font-size:1.25em; margin-top:6px; }
    .bloque-inferior{ display:flex; flex-direction:column; align-items:center; margin-top:14px; }
    .ubicacion{ color:#fff; font-weight:300; font-size:1em; margin-bottom:2px; }
    .tipo{ color:#fff; font-weight:300; font-size:.9em; }
    /* Spans variables */
    .span-4{grid-column:span 4;} .span-6{grid-column:span 6;} .span-8{grid-column:span 8;} .span-12{grid-column:span 12;}
    @media (max-width:1100px){ .span-4,.span-6,.span-8,.span-12{ grid-column:span 6; } }
    @media (max-width:700px){
      main{ padding:0 12px; }
      .span-4,.span-6,.span-8,.span-12{ grid-column:span 12; }
      .card > a{ aspect-ratio:4/3; }
    }
  </style>
</head>
<body>
  <?php include __DIR__.'/partials/header.php'; ?>

  <main>
    <h1>PROYECTOS</h1>
    <div class="sub">Una selección de trabajos.</div>

    <!-- Filtros -->
    <div class="filtros" role="toolbar" aria-label="Filtros de proyecto">
      <span class="chip" data-filter="all" data-active="true">Todos</span>
      <span class="chip" data-filter="restaurante">Restaurante</span>
      <span class="chip" data-filter="tienda">Tienda</span>
      <span class="chip" data-filter="oficina">Oficina</span>
      <span class="chip" data-filter="bienestar">Bienestar</span>
      <span class="chip" data-filter="hotel">Hotel</span>
      <span class="chip" data-filter="vivienda">Vivienda</span>
      <span class="chip" data-filter="otros">Otros</span>
    </div>

    <!-- Grid -->
    <section class="grid" id="grid-proyectos">
      <?php foreach ($projects as $p):
        // Importante: URLs públicas bajo /web
        $href = 'proyectos/'.$p['slug'].'/'; // relativo → /web/proyectos/<slug>/
        $base = '/assets/proyectos/'.$p['carpeta'].'/'.$p['img_base'];
        $avif_960  = $base.'-960.avif';
        $avif_1440 = $base.'-1440.avif';
        $avif_1920 = $base.'-1920.avif';
        $webp_960  = $base.'-960.webp';
        $webp_1440 = $base.'-1440.webp';
        $webp_1920 = $base.'-1920.webp';
        $jpg_fallback = $base.'.jpg';
      ?>
      <article class="card span-4"
               data-tags="<?= htmlspecialchars($p['tags']) ?>"
               data-title="<?= htmlspecialchars($p['titulo']) ?>"
               data-year="<?= (int)$p['year'] ?>">
        <a href="<?= htmlspecialchars($href) ?>">
          <picture>
  <source type="image/avif"
          srcset="<?= $avif_960 ?> 960w, <?= $avif_1440 ?> 1440w, <?= $avif_1920 ?> 1920w"
          sizes="(max-width:700px) 100vw, 33vw">
  <source type="image/webp"
          srcset="<?= $webp_960 ?> 960w, <?= $webp_1440 ?> 1440w, <?= $webp_1920 ?> 1920w"
          sizes="(max-width:700px) 100vw, 33vw">
  <img class="thumb" src="<?= $jpg_fallback ?>" alt="<?= htmlspecialchars($p['alt']) ?>" loading="lazy" decoding="async">
</picture>

          <div class="card-body">
            <div class="title"><?= htmlspecialchars($p['titulo']) ?></div>
            <div class="cliente"><?= htmlspecialchars($p['cliente']) ?></div>
            <div class="bloque-inferior">
              <div class="ubicacion"><?= htmlspecialchars($p['ubicacion']) ?></div>
              <div class="tipo"><?= htmlspecialchars($p['tipo']) ?></div>
            </div>
          </div>
        </a>
      </article>
      <?php endforeach; ?>
    </section>
  </main>

  <?php include __DIR__.'/partials/footer.php'; ?>

  <script>
    // ======= Utilidad shuffle (Fisher–Yates) =======
    function shuffle(arr){ for(let i=arr.length-1;i>0;i--){ const j=Math.floor(Math.random()*(i+1)); [arr[i],arr[j]]=[arr[j],arr[i]]; } return arr; }

    (function(){
      const grid  = document.getElementById('grid-proyectos');
      if (!grid) return;

      const chips = Array.from(document.querySelectorAll('.chip'));
      const cards = Array.from(grid.querySelectorAll('.card'));

      const LAST_TITLES  = ['DESPACHOS PARA STREAMER','REFORMA DE VIVIENDA'];
      const SIZE_CLASSES = ['span-4','span-6','span-8','span-12'];

      function getRowTemplates(){
        const w = window.innerWidth;
        if (w >= 1100){
          return [
            ['span-8','span-4'],
            ['span-4','span-8'],
            ['span-6','span-6'],
            ['span-4','span-4','span-4']
          ];
        } else if (w >= 700){
          return [
            ['span-12'],
            ['span-6','span-6'],
            ['span-8','span-4'],
            ['span-4','span-8']
          ];
        } else {
          return [['span-12']];
        }
      }

      function randomLayoutFor(n){
        const templates = getRowTemplates();
        const out = [];
        while (out.length < n){
          const row = templates[Math.floor(Math.random()*templates.length)];
          out.push(...row);
        }
        return out.slice(0,n);
      }

      function clearSizeClasses(card){ SIZE_CLASSES.forEach(cl => card.classList.remove(cl)); }

      function apply(filter){
        const visible = [];
        const hidden  = [];

        // 1) filtrar
        cards.forEach(c=>{
          const ok = (filter==='all') || ((c.dataset.tags||'').toLowerCase().includes(filter));
          (ok ? visible : hidden).push(c);
        });

        // 2) separar “finales” y barajar el resto
        const end  = visible.filter(c => LAST_TITLES.includes((c.dataset.title||'').toUpperCase()));
        const rest = visible.filter(c => !LAST_TITLES.includes((c.dataset.title||'').toUpperCase()));
        shuffle(rest);
        const ordered = [...rest, ...end];

        // 3) mostrar/ocultar y reordenar en DOM
        ordered.forEach(c => c.style.display = '');
        hidden.forEach(c  => c.style.display = 'none');
        const frag = document.createDocumentFragment();
        ordered.forEach(c => frag.appendChild(c));
        hidden.forEach(c  => frag.appendChild(c));
        grid.appendChild(frag);

        // 4) layout aleatorio por filas
        const sizes = randomLayoutFor(ordered.length);
        ordered.forEach((c,i)=>{ clearSizeClasses(c); c.classList.add(sizes[i]); });
      }

      // Filtros
      function setActive(el){ chips.forEach(c=>c.dataset.active='false'); el.dataset.active='true'; }
      chips.forEach(chip=>{
        chip.addEventListener('click', ()=>{
          setActive(chip);
          apply(chip.dataset.filter || 'all');
        });
      });

      // Inicial
      setActive(document.querySelector('.chip[data-filter="all"]'));
      apply('all');
    })();
  </script>
</body>
</html>
	