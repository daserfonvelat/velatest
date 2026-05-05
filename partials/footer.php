<?php
$menu = $menu ?? [
  ['href'=>'/descubrenos.php','label'=>'EL ESTUDIO'],
  ['href'=>'/loquehacemos.php','label'=>'SERVICIOS'],
  ['href'=>'/proyectos.php','label'=>'PROYECTOS'],
  ['href'=>'/contacto.php','label'=>'CONTACTO'],
];

$currentPath = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';
$currentSlug = preg_replace('/\.(php|html)$/i', '', strtolower(basename($currentPath)));
function menu_slug($href){
  $p = parse_url($href, PHP_URL_PATH) ?: $href;
  return preg_replace('/\.(php|html)$/i', '', strtolower(basename($p)));
}
?>

<style>
/* ——— Footer Glass a TODO ANCHO ——— */
#velat-footerbar{
  position:fixed;
  bottom:0;
  left:0;               /* ⬅️ ocupa de borde a borde */
  right:0;              /* ⬅️ ocupa de borde a borde */
  z-index:400;

  display:flex;
  justify-content:flex-end;   /* ⬅️ alineado a la derecha */
  align-items:center;
  gap:22px;

  height:54px;
  padding:
    0
    calc(max(20px, env(safe-area-inset-right)))
    calc(max(0px, env(safe-area-inset-bottom)))
    calc(max(40px, env(safe-area-inset-left)));

  background:rgba(255,255,255,.35);
  -webkit-backdrop-filter:blur(12px);
  backdrop-filter:blur(12px);
  border-top:1px solid rgba(0,0,0,.08);

  font-family:'ABCGaisyr','Courier New',monospace;
  font-size:13px;
  letter-spacing:.4px;
  color:#111;
}

/* Separadores */
#velat-footerbar .sep{
  color:#999; opacity:.75;
  font-weight:600;
  margin:0 4px;
}

/* Enlaces */
#velat-footerbar a{
  position:relative;
  text-decoration:none;
  color:inherit;
  opacity:.88;
  transition:opacity .18s ease, transform .15s ease;
  padding:3px 0;
}
#velat-footerbar a:hover{ opacity:1; transform:translateY(-1px); }
#velat-footerbar a.is-active{ opacity:1; font-weight:600; }

/* ASCII brackets */
#velat-footerbar a::before{ content:'[ '; opacity:.85; }
#velat-footerbar a::after { content:' ]'; opacity:.85; }

/* Caret “>” activo */
#velat-footerbar a.is-active::before{ content:'> '; opacity:1; font-weight:700; }

/* Subrayado animado */
#velat-footerbar a .u{
  position:absolute; left:0; right:0; bottom:-2px;
  height:1px; background:#111;
  transform:scaleX(0);
  transform-origin:center;
  transition:transform .2s ease;
  opacity:.9;
}
#velat-footerbar a:hover .u,
#velat-footerbar a.is-active .u{ transform:scaleX(1); }

/* Glitch sutil */
@keyframes velat-glitch {
  0%{ text-shadow:0 0 transparent; }
  50%{ text-shadow:1px 0 rgba(0,0,0,.25), -1px 0 rgba(0,0,0,.15); }
  100%{ text-shadow:0 0 transparent; }
}
#velat-footerbar a:hover .lbl{ animation:velat-glitch 180ms steps(2,jump-none) 1; }

/* ——— Mobile ——— */
@media (max-width:900px){
  #velat-footerbar{
    justify-content:center;    /* centrado en móvil */
    height:58px;
    padding:
      0
      calc(max(10px, env(safe-area-inset-right)))
      calc(max(6px, env(safe-area-inset-bottom)))
      calc(max(10px, env(safe-area-inset-left)));
  }
  #velat-footerbar a::before, #velat-footerbar a::after{ content:''; }
  #velat-footerbar a.is-active::before{ content:'>'; margin-right:3px; }
  #velat-footerbar .sep{ display:none; }
}
</style>

<nav id="velat-footerbar" aria-label="Menú inferior">
  <?php foreach($menu as $i=>$item):
    $isActive = (menu_slug($item['href']) === $currentSlug);
  ?>
    <?php if($i>0): ?><span class="sep" aria-hidden="true">_</span><?php endif; ?>
    <a href="<?= htmlspecialchars($item['href']) ?>"
       class="<?= $isActive?'is-active':'' ?>"
       <?= $isActive?'aria-current="page"':'' ?>>
      <span class="lbl"><?= htmlspecialchars($item['label']) ?></span>
      <span class="u" aria-hidden="true"></span>
    </a>
  <?php endforeach; ?>
</nav>
