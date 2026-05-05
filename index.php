<?php
  // —— Config por página (usado por partials/head.php) ——
  $page_title   = 'VELAT Studio';
  $page_desc    = 'Estudio de interiorismo y arquitectura: comercios, F&B y espacios con narrativa.';
  $og_type      = 'website';
  $og_site      = 'VELAT Studio';
  $twitter_site = '@velatstudio';
  $meta_robots  = 'index, follow';
  $lang_html    = 'es';
?>
<!DOCTYPE html>
<html lang="<?= htmlspecialchars($lang_html ?? 'es', ENT_QUOTES, 'UTF-8') ?>">
<head>
  <?php include __DIR__ . '/partials/head.php'; ?>
  <style>
    @font-face{ font-family:'ABCGaisyr'; src:url('assets/fonts/Gaisyr.woff2') format('woff2'); font-display:swap; }
    :root{
      --fg:#232323; --bg:#fff; --muted:#666; --line:#ddd;
      --ms-font:'ABCGaisyr', ui-monospace, Menlo, Consolas, monospace;
      --ms-fg:#111; --ms-accent:#111;
      --term-left:12px;
      --term-size:clamp(11px,1.2vw,13px);
      --term-lh:1.45; --gap-line:.04em;
      --footer-offset:0px; --msbar-offset:0px;
    }
    *{ box-sizing:border-box; }
    html,body{ height:100%; margin:0; background:var(--bg); color:var(--fg); font-family:'ABCGaisyr',sans-serif; overflow-x:hidden; }

    /* ===== CRT / veladuras ===== */
    html.crt{ filter:url(#crtWarp) saturate(1.45) contrast(1.35) brightness(.9); }
    html.crt::before{
      content:''; position:fixed; inset:0; z-index:9999; pointer-events:none; mix-blend-mode:multiply;
      background:
        linear-gradient(rgba(0,0,0,.28) 50%, transparent 50%) 0 0/100% 1px,
        linear-gradient(90deg, rgba(0,0,0,.08) 1px, transparent 1px) 0 0/3px 100%,
        radial-gradient(ellipse at center, rgba(0,0,0,0) 56%, rgba(0,0,0,.7) 100%);
      transform:perspective(900px) rotateX(.9deg) rotateY(.35deg) scale(1.02,1.028);
      animation:crt-flick 1.15s linear infinite, crt-breath 5.2s ease-in-out infinite;
    }
    html.crt::after{
      content:''; position:fixed; inset:0; z-index:9998; pointer-events:none; mix-blend-mode:screen;
      background:
        radial-gradient(circle at 50% 50%, rgba(255,255,255,.09), transparent 60%),
        repeating-linear-gradient(90deg, rgba(255,0,60,.18) 0 1px, rgba(0,255,140,.18) 1px 2px, rgba(60,160,255,.18) 2px 3px, transparent 3px 6px),
        linear-gradient(to bottom, transparent 0%, rgba(255,255,255,.08) 48%, rgba(255,255,255,.22) 50%, rgba(255,255,255,.08) 52%, transparent 100%);
      transform:translate(3px,.6px) rotate(.02deg);
      animation:chroma-jitter .65s steps(2,end) infinite, roll-scan 3.4s linear infinite;
      opacity:.95;
    }
    body.crt-grain-a::before, body.crt-grain-b::before, body.crt-grain-c::before{
      content:''; position:fixed; inset:-10%; z-index:9997; pointer-events:none; mix-blend-mode:multiply; opacity:.38;
      background:repeating-conic-gradient(from 0deg, rgba(0,0,0,.10) 0% 2%, transparent 2% 4%);
      filter:blur(.35px) contrast(1.12); animation:grain-move 1.1s steps(3,end) infinite;
    }
    html.crt.greentint{ filter:url(#crtWarp) hue-rotate(95deg) saturate(1.7) contrast(1.33) brightness(.92); }
    html.crt.greentint body::after{ content:''; position:fixed; inset:0; z-index:9996; pointer-events:none; mix-blend-mode:color;
      background:radial-gradient(ellipse at 50% 55%, rgba(120,255,140,.16), transparent 60%), linear-gradient(rgba(80,200,120,.16), rgba(40,120,60,.16)); }
    @keyframes crt-flick{ 0%{opacity:1}45%{opacity:.9}50%{opacity:.76}55%{opacity:.9}100%{opacity:1} }
    @keyframes crt-breath{ 0%{filter:none}50%{filter:brightness(1.04) saturate(1.06)}100%{filter:none} }
    @keyframes chroma-jitter{ 0%{transform:translate(3px,.6px) rotate(.02deg)}50%{transform:translate(4.2px,-.4px) rotate(-.04deg)}100%{transform:translate(3px,.6px) rotate(.02deg)} }
    @keyframes roll-scan{ 0%{background-position:0 120%,0 0,0 -100%}100%{background-position:0 -120%,0 0,0 120%} }
    @keyframes grain-move{ 0%{transform:translate(0,0)}50%{transform:translate(-2.4%,1.2%)}100%{transform:translate(2.4%,-1.2%)} }

    .veil{ position:fixed; inset:0; pointer-events:none; background:rgba(255,255,255,.32); backdrop-filter:blur(6px); -webkit-backdrop-filter:blur(6px); opacity:1; transition:opacity .9s, backdrop-filter .9s; z-index:2000; }
    .veil.veil--hide{ opacity:0; backdrop-filter:blur(0); -webkit-backdrop-filter:blur(0); }

    /* Fondo y logos */
    .logo-v{
      position:fixed; left:50%; top:50%; transform:translate(-50%,-50%);
      height:100vh; min-width:100vw; object-fit:contain; z-index:1; pointer-events:auto; cursor:pointer;
    }
    .logo-velat{ position:fixed; left:12px; top:12px; width:182px; max-width:24vw; opacity:.85; z-index:34; cursor:pointer; transition:transform .2s, opacity .2s, filter .2s; }
    .logo-velat:hover{ transform:scale(1.03); opacity:.95; filter:contrast(1.05); }

    @media (max-width:900px){
      .logo-v{ height:115vh; min-width:100vw; object-fit:cover; }
      :root{ --term-size:clamp(18px, 3.8vw, 24px); }
      .logo-velat{ width:160px; max-width:44vw; left:10px; top:10px; }
    }

    /* Asterisco */
    .asterisk-wrap{ position:fixed; top:12px; right:12px; z-index:35; }
    .asterisk{ width:34px; height:34px; cursor:pointer; opacity:.95; transition:transform .25s, filter .25s, opacity .25s; }
    .asterisk:hover{ transform:scale(1.07); filter:brightness(1.05) contrast(1.05); opacity:.85; }
    .asterisk-flicker{ animation:ast-flicker 1.4s linear infinite; }
    @keyframes ast-flicker{ 0%{opacity:.95}22%{opacity:.84}39%{opacity:.92}61%{opacity:.86}77%{opacity:.95}100%{opacity:.9} }

    /* Footer auto-show/autohide */
    .footer-banner{ position:fixed; left:0; right:0; bottom:0; background:#000; color:#fff; transform:translateY(100%); transition:transform .4s cubic-bezier(.4,.8,.2,1); z-index:40; padding:8px 14px; font-family:'ABCGaisyr',sans-serif; pointer-events:none; }
    .footer-banner.show{ transform:translateY(0); pointer-events:auto; }
    .footer-banner .fb-inner{ position:relative; max-width:1100px; margin:0 auto; display:flex; align-items:center; gap:10px; flex-wrap:wrap; }
    .fb-left{ display:inline-flex; align-items:center; }
    .fb-center{ position:absolute; left:50%; transform:translateX(-50%); display:inline-flex; align-items:center; gap:12px; }
    .fb-right{ margin-left:auto; display:inline-flex; align-items:center; }
    .footer-banner a{ color:#fff; text-decoration:none; opacity:.9; font-size:.70rem; }
    .footer-banner a:hover{ opacity:1; text-decoration:underline; }
    .footer-banner .sep{ color:#fff; opacity:.55; margin:0 2px; font-size:.70rem; }
    .fb-address{ display:flex; flex-direction:column; line-height:1.15; gap:2px; color:#fff; font-size:.70rem; opacity:.9; }
    .fb-icon{ display:inline-flex; width:20px; height:20px; opacity:.9; transition:opacity .2s; }
    .fb-icon:hover{ opacity:1; }
    .fb-icon svg{ width:100%; height:100%; stroke:#fff; fill:none; }
    .fb-icon svg .fill{ fill:#fff; stroke:none; }

    /* Terminal (menú) — MAYÚSCULAS */
    .terminal{ position:fixed; left:var(--term-left); bottom:calc(14px + var(--msbar-offset) + var(--footer-offset)); z-index:31; display:flex; flex-direction:column; gap:calc(var(--gap-line)*1); user-select:none; pointer-events:none; }
    .term-menu .line{ font:700 var(--term-size)/var(--term-lh) var(--ms-font); color:var(--ms-fg); white-space:nowrap; margin:0; display:flex; align-items:flex-end; text-transform:uppercase; }
    .term-menu a{ color:inherit; text-decoration:none; display:inline-block; pointer-events:auto; }
    .term-caret{ display:inline-block; width:.6ch; margin-left:.2ch; border-bottom:2px solid var(--ms-accent); transform:translateY(.14em); animation:blink 1s steps(1,end) infinite; }
    .term-menu.typed .line>a{ overflow:hidden; width:0; --len:0; --w:calc(var(--len)*1ch); animation:term-type var(--dur,1s) steps(var(--len),end) var(--delay,0s) both; }
    @keyframes term-type{ from{width:0} to{width:var(--w)} }
    @keyframes blink{ 50%{opacity:0} }

    /* ===== Hover/focus para menú terminal ===== */
    .term-menu .line > a{
      position:relative;
      cursor:pointer;
      transition:filter .15s ease, opacity .15s ease, transform .15s ease;
    }
    .term-menu .line > a::after{
      content:'';
      position:absolute; left:0; right:0;
      bottom:-0.06em;
      height:2px;
      background:currentColor;
      transform:scaleX(0);
      transform-origin:left;
      transition:transform .18s ease-out;
      opacity:.9;
    }
    .term-menu .line:hover > a,
    .term-menu .line > a:focus-visible{
      filter:contrast(1.08);
      opacity:1;
    }
    .term-menu .line:hover > a::after,
    .term-menu .line > a:focus-visible::after{
      transform:scaleX(1);
    }
    .term-menu .line:hover .term-caret,
    .term-menu .line > a:focus-visible + .term-caret{
      border-bottom-color: var(--ms-accent);
      transform:translateY(.14em) scaleX(1.2);
    }
    @media (hover:hover){
      .term-menu .line:hover > a{ transform:translateX(1px); }
    }
    @media (prefers-reduced-motion: reduce){
      .term-menu .line > a, .term-menu .line > a::after{ transition:none; }
    }

    /* MS-log — MAYÚSCULAS */
    .mslogbar{
      position:fixed; left:0; right:0; bottom:var(--footer-offset); z-index:32;
      font:700 var(--term-size)/var(--term-lh) var(--ms-font); color:#111; pointer-events:none; padding:6px 0; text-transform:uppercase;
      background:linear-gradient(to top, rgba(255,255,255,.92), rgba(255,255,255,.72) 60%, transparent);
      -webkit-mask-image:linear-gradient(to right, transparent 0, #000 24px, #000 calc(100% - 24px), transparent 100%);
              mask-image:linear-gradient(to right, transparent 0, #000 24px, #000 calc(100% - 24px), transparent 100%);
    }
    .mslogbar .inner{ padding-left:var(--term-left); padding-right:12px; white-space:nowrap; }
    .mslog-line{ display:inline-block; overflow:hidden; width:0; --len:0; --w:calc(var(--len)*1ch); }
    .mslog-caret{ display:inline-block; width:.6ch; margin-left:.2ch; border-bottom:2px solid #111; transform:translateY(.14em); animation:blink 1s steps(1,end) infinite; }
    @keyframes mslog-type{ from{width:0} to{width:var(--w)} }

    /* Tarjetas GLITCH (sin marco/fondo; caption debajo) */
    .glitch-card{
      position:fixed;
      z-index:38;
      pointer-events:auto; display:block; background:transparent; border:none; box-shadow:none; border-radius:0;
      transform:translateZ(0); animation:card-in .12s ease-out both; text-decoration:none; color:inherit;
    }
    .glitch-card .thumb{
      width:100%; height:0; padding-bottom:66%;
      background:#e9e9e9 center/cover no-repeat;
      filter:grayscale(1) contrast(1.05);
      transition:filter .25s ease, transform .15s steps(2,end);
      position:relative; overflow:hidden;
    }
    .glitch-card .thumb::before,
    .glitch-card .thumb::after{
      content:''; position:absolute; inset:-2px; background:inherit; background-clip:content-box;
      opacity:0; mix-blend-mode:screen; pointer-events:none;
    }
    .glitch-card.glitching .thumb::before{
      opacity:.65; filter:hue-rotate(15deg) saturate(1.4);
      animation:gl1 180ms steps(2,end) 0s 1;
    }
    .glitch-card.glitching .thumb::after{
      opacity:.65; filter:hue-rotate(-15deg) saturate(1.4);
      animation:gl2 180ms steps(2,end) 0s 1;
    }
    @keyframes gl1{
      0%{ clip-path:inset(0 0 80% 0); transform:translate(-2px,-1px); }
      50%{ clip-path:inset(30% 0 30% 0); transform:translate(2px,1px); }
      100%{ clip-path:inset(80% 0 0 0); transform:translate(-1px,0); }
    }
    @keyframes gl2{
      0%{ clip-path:inset(10% 0 70% 0); transform:translate(2px,0); }
      50%{ clip-path:inset(40% 0 20% 0); transform:translate(-2px,-1px); }
      100%{ clip-path:inset(70% 0 10% 0); transform:translate(1px,1px); }
    }
    .glitch-card:hover .thumb{ filter:none; }
    .glitch-card .caption{
      margin-top:4px; padding:0; background:transparent; border:none; color:#111;
      font:700 11px/1.35 var(--ms-font);
      white-space:nowrap; pointer-events:none; text-transform:uppercase;
    }
    .glitch-card .caption .type{ display:inline; }
    .glitch-card .caption .caret{
      display:inline-block; width:.6ch; margin-left:.2ch;
      border-bottom:2px solid currentColor; transform:translateY(.14em);
      animation:blink 1s steps(1,end) infinite;
    }
    .glitch-card.fade-out{ animation:card-out .18s ease-in both; }
    @keyframes card-in{ from{opacity:0; transform:translateY(8px) scale(.98)} to{opacity:1; transform:translateY(0) scale(1)} }
    @keyframes card-out{ from{opacity:1; transform:translateY(0) scale(1)} to{opacity:0; transform:translateY(6px) scale(.98)} }

    /* ===== View Transitions: tiempos (si el navegador soporta) ===== */
    ::view-transition-group(root){ animation-duration:.42s; }
    ::view-transition-old(root), ::view-transition-new(root){ animation-timing-function:cubic-bezier(.2,.8,.2,1); }
  </style>
</head>

<body>
  <!-- SVG filters -->
  <svg width="0" height="0" style="position:absolute">
    <filter id="crtWarp">
      <feTurbulence type="fractalNoise" baseFrequency="0.008 0.02" numOctaves="2" seed="7" result="noise"/>
      <feDisplacementMap in="SourceGraphic" in2="noise" scale="8" xChannelSelector="R" yChannelSelector="G"/>
    </filter>
  </svg>

  <!-- Fondo -->
  <img src="assets/Glitch_g.gif" class="logo-v" id="glitchV" alt="Icono V glitcheada" />

  <!-- Logo (EL ESTUDIO) -->
  <img src="assets/logo100.png" class="logo-velat" alt="Logo Velat" id="logoVelat" onclick="location.href='descubrenos.php'"/>

  <!-- Asterisco (Contacto) -->
  <a href="contacto.php" class="asterisk-wrap" id="asteriskWrap" aria-label="Contacto">
    <svg class="asterisk asterisk-flicker" viewBox="0 0 32 32" width="34" height="34">
      <g stroke="#111" stroke-width="4" stroke-linecap="round">
        <line x1="16" y1="3"  x2="16" y2="29"/>
        <line x1="4.5" y1="8.5"  x2="27.5" y2="23.5"/>
        <line x1="4.5" y1="23.5" x2="27.5" y2="8.5"/>
      </g>
    </svg>
  </a>

  <!-- Footer -->
  <div class="footer-banner" id="footerBanner" aria-hidden="true">
    <div class="fb-inner">
      <div class="fb-left">
        <a href="aviso-legal.php">aviso legal</a><span class="sep">/</span>
        <a href="privacidad.php">privacidad</a>
      </div>
      <div class="fb-center" aria-label="redes sociales">
        <a class="fb-icon" href="https://instagram.com/velat_.studio" target="_blank" rel="noopener" aria-label="Instagram">
          <svg viewBox="0 0 24 24"><rect x="3" y="3" width="18" height="18" rx="5"/><circle cx="12" cy="12" r="4.2"/><circle class="fill" cx="17.5" cy="6.5" r="1.3"/></svg>
        </a>
        <a class="fb-icon" href="https://www.linkedin.com/company/velatstudio" target="_blank" rel="noopener" aria-label="LinkedIn">
          <svg viewBox="0 0 24 24"><rect class="fill" x="3" y="3" width="18" height="18" rx="3"/><path d="M7.3 17V10.1M7.3 7.7h0.01M10.6 17V10.9c0-1.1.9-2 2-2s2 .9 2 2V17M10.6 12.9h4" stroke="#000" stroke-width="1.35"/></svg>
        </a>
        <a class="fb-icon" href="https://www.pinterest.com/velatstudio" target="_blank" rel="noopener" aria-label="Pinterest">
          <svg viewBox="0 0 24 24"><circle class="fill" cx="12" cy="12" r="9"/></svg>
        </a>
      </div>
      <div class="fb-right">
        <div class="fb-address">
          <span>Av. María Cristina 5, 46001 - Valencia</span>
          <span><a href="tel:+34625893300">+34 625 893 300</a></span>
        </div>
      </div>
    </div>
  </div>

  <!-- Terminal (menú) -->
  <div class="terminal" id="terminal" aria-label="Terminal de navegación">
    <div class="term-menu typed" id="termMenu" aria-hidden="false">
      <div class="line"><a href="proyectos.php"    data-text="&gt; PROYECTOS">&gt; PROYECTOS</a><span class="term-caret" aria-hidden="true"></span></div>
      <div class="line"><a href="loquehacemos.php" data-text="&gt; SERVICIOS">&gt; SERVICIOS</a><span class="term-caret" aria-hidden="true"></span></div>
      <div class="line"><a href="descubrenos.php"  data-text="&gt; EL ESTUDIO">&gt; EL ESTUDIO</a><span class="term-caret" aria-hidden="true"></span></div>
      <div class="line"><a href="contacto.php"     data-text="&gt; CONTACTO">&gt; CONTACTO</a><span class="term-caret" aria-hidden="true"></span></div>
    </div>
  </div>

  <!-- MS-log -->
  <div class="mslogbar" id="mslogBar" role="status" aria-live="polite">
    <div class="inner">
      <span id="mslogLine" class="mslog-line"></span><span class="mslog-caret" aria-hidden="true"></span>
    </div>
  </div>

  <script>
  // ===== Helpers View Transitions + fallback =====
  function supportsViewTransitions(){
    return 'startViewTransition' in document && 'animate' in document.documentElement;
  }
  function slugFromHref(href){
    try{
      const u = new URL(href, location.href);
      const parts = u.pathname.replace(/\/+$/,'').split('/');
      return parts[parts.length-1] || parts[parts.length-2] || 'proj';
    }catch(_){ return 'proj'; }
  }

  // ===== Footer: aparece con scroll y se oculta a los 4s =====
  document.addEventListener('DOMContentLoaded',()=>{
    const banner = document.getElementById('footerBanner');
    const docEl  = document.scrollingElement || document.documentElement;
    const root   = document.documentElement;
    if(!banner) return;

    let shown=false, hideTimer=null;
    const canScroll = () => (docEl.scrollHeight - 1) > window.innerHeight;

    function measureAndSetOffsets(){
      const visible = banner.classList.contains('show');
      const fh = visible ? banner.getBoundingClientRect().height : 0;
      root.style.setProperty('--footer-offset', fh ? (fh+'px') : '0px');
      const msbar = document.getElementById('mslogBar');
      const mh = msbar ? msbar.getBoundingClientRect().height : 0;
      root.style.setProperty('--msbar-offset', mh ? (mh+'px') : '0px');
    }
    function armAutoHide(){ if (hideTimer) clearTimeout(hideTimer); hideTimer = setTimeout(()=>{ hide(); }, 4000); }
    function show(){ if(!shown){ banner.classList.add('show'); shown=true; measureAndSetOffsets(); } armAutoHide(); }
    function hide(){ if(shown){ banner.classList.remove('show'); shown=false; measureAndSetOffsets(); if(hideTimer){clearTimeout(hideTimer); hideTimer=null;} } }

    window.addEventListener('scroll',()=>{ const y = docEl.scrollTop || 0; if (y > 60) show(); if (y < 4) hide(); },{passive:true});
    window.addEventListener('wheel',(e)=>{ if (!canScroll() && e.deltaY > 0) show(); },{passive:true});
    let startY = null;
    window.addEventListener('touchstart',(e)=>{ startY = e.touches?.[0]?.clientY ?? null; },{passive:true});
    window.addEventListener('touchmove',(e)=>{ if (canScroll()) return; const t=e.touches?.[0]; if(startY==null||!t) return; const dy=t.clientY-startY; if(dy < -10) show(); startY=t.clientY; },{passive:true});
    window.addEventListener('touchend',()=>{ startY=null; },{passive:true});

    measureAndSetOffsets();
    window.addEventListener('resize', measureAndSetOffsets);
    setTimeout(measureAndSetOffsets,10);
    setTimeout(measureAndSetOffsets,200);
  });

  // ===== Menú MS-DOS: “tipeo” =====
  (function(){
    const menu = document.getElementById('termMenu');
    if(!menu) return;
    const links = menu.querySelectorAll('.line > a');
    links.forEach((a,i)=>{
      const t=a.getAttribute('data-text')||a.textContent, len=t.length;
      a.style.setProperty('--len',len);
      a.style.setProperty('--w',`calc(${len} * 1ch)`);
      a.style.setProperty('--dur',(0.8+i*0.15)+'s');
      a.style.setProperty('--delay',(0.2+i*0.22)+'s');
      const _ = a.offsetWidth;
      a.style.animation = 'none';
      requestAnimationFrame(()=>{ a.style.animation = ''; });
    });
  })();

  // ===== MS-log: mensajes en castellano (mayúsculas) =====
  (function(){
    const el = document.getElementById('mslogLine');
    if(!el) return;
    const messages = [
      '> INTERIORISMO DE COMERCIOS … OK',
      '> DISEÑO DE ESPACIOS F&B … OK',
      '> ARQUITECTURA + INTERIORISMO … OK',
      '> NARRATIVA DE MARCA EN EL ESPACIO … OK',
      '> CONCEPTO + DIRECCIÓN DE ARTE … OK',
      '> ILUMINACIÓN TÉCNICA (3000K–4000K) … OK',
      '> MATERIALES: ACERO INOX · VIDRIO · TERRACOTA … OK',
      '> CONFORT ACÚSTICO Y LUMINOSO … OK',
      '> EXPERIENCIA DE USUARIO: RECORRIDO + RITMO … OK',
      '> MANUAL ESPACIAL DE IDENTIDAD … OK',
      '> WAYFINDING Y SEÑALÉTICA … OK',
      '> DISEÑO DE MOBILIARIO A MEDIDA … OK',
      '> PRODUCCIÓN Y DIRECCIÓN DE OBRA … OK',
      '> RENDERS + IMAGEN EDITORIAL … OK'
    ];
    let i=0;

    async function type(line){
      const len = line.length;
      el.textContent = line;
      el.style.setProperty('--len', len);
      el.style.setProperty('--w', `calc(${len} * 1ch)`);
      el.style.animation = 'none';
      el.style.width = '0';
      const _ = el.offsetWidth;
      requestAnimationFrame(()=>{
        el.style.animation = 'mslog-type 1.05s steps(var(--len),end) 0s both';
      });
      await new Promise(r=>setTimeout(r, Math.max(len*28, 420)));
    }
    (async function loop(){
      while(true){
        await type(messages[i % messages.length]);
        await new Promise(r=>setTimeout(r, 1400));
        i++;
      }
    })();
  })();

  // ===== KONAMI / CRT =====
  (function(){
    const SEQ = ['arrowup','arrowup','arrowdown','arrowdown','arrowleft','arrowright','arrowleft','arrowright','b','a'];
    let buf = [];
    try{ if(localStorage.getItem('velat_crt') === 'on'){ enableCRT(true); } }catch(_){}

    function enableCRT(on){
      const root = document.documentElement;
      root.classList.toggle('crt', on);
      try{ localStorage.setItem('velat_crt', on ? 'on' : 'off'); }catch(_){}
      document.body.classList.toggle('crt-grain-a', on);
      document.body.classList.toggle('crt-grain-b', on);
      document.body.classList.toggle('crt-grain-c', on);
      toast(on ? 'CRT EXTREMO ACTIVADO' : 'CRT DESACTIVADO');
    }
    function toggleCRT(){ enableCRT(!document.documentElement.classList.contains('crt')); }
    function toast(txt){
      let t = document.getElementById('crtToast');
      if(!t){
        t = document.createElement('div');
        t.id = 'crtToast';
        t.style.cssText = 'position:fixed;right:12px;bottom:12px;padding:6px 10px;background:#000;color:#fff;font:700 12px/1.2 ABCGaisyr,monospace;border-radius:6px;opacity:.92;z-index:10000;pointer-events:none;text-transform:uppercase';
        document.body.appendChild(t);
      }
      t.textContent = txt;
      t.style.display = 'block';
      clearTimeout(t._h); t._h = setTimeout(()=>{ t.style.display='none'; }, 1000);
    }

    const logo = document.getElementById('logoVelat');
    if (logo){ logo.addEventListener('dblclick', (e)=>{ e.preventDefault(); toggleCRT(); }); }

    document.addEventListener('keydown', (e)=>{
      const tag = (e.target && e.target.tagName || '').toLowerCase();
      if(tag==='input'||tag==='textarea'||e.target.isContentEditable) return;
      const k = (e.key || '').toLowerCase();
      if ((e.ctrlKey && e.altKey && k==='c') || k==='k'){ toggleCRT(); return; }
      buf.push(k); if (buf.length > SEQ.length) buf.shift();
      for(let i=0;i<SEQ.length;i++){ if (buf[i] !== SEQ[i]) return; }
      toggleCRT(); buf = [];
    }, {passive:true});
  })();

  // ===== Veladura de entrada =====
  (function(){
    function applyVeil(durationMs){
      const reduced = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;
      if (reduced) return;
      const veil = document.createElement('div'); veil.className='veil'; document.body.appendChild(veil);
      requestAnimationFrame(()=> veil.classList.add('veil--hide'));
      const ttl = typeof durationMs==='number'? durationMs:1200;
      setTimeout(()=>{ try{ veil.remove(); }catch(_){ veil.parentNode && veil.parentNode.removeChild(veil); } }, ttl);
    }
    window.addEventListener('load', ()=> applyVeil(1200));
  })();

   /* ===== Tarjetas “glitch” + View Transitions ===== */
  (function(){
    const V = document.getElementById('glitchV');
    const P = [];

    // BNG → “SEDE BNG”
    [
      'B2-auditorio-1440.webp','B3-cortinas-1440.webp','B4-executiva1-1440.webp',
      'B5-executiva2-1440.webp','B7-recepcion-1440.webp'
    ].forEach(f=>P.push({title:'SEDE PARTIDO BNG', img:'assets/proyectos/BNG/'+f, href:'proyectos/sede-partido-bng/'}));

    // Neboeiro
    [
      'N1-bancos-1440.webp','N2-entrada-1440.webp','N3-cocina-1440.webp','N4-lavadero-1440.webp',
      'N6-patio-1440.webp','N7-h1-1440.webp','N8-h2-1440.webp'
    ].forEach(f=>P.push({title:'NEBOEIRO DE TOUBES', img:'assets/proyectos/Neb_Toubes/'+f, href:'proyectos/neboeiro-de-toubes/'}));

    // Wellness Only You
    [
      'W1-acceso-1440.webp','W2-general-1440.webp','W3-barrad-1440.webp','W4-barran-1440.webp',
      'W6-entrada-1440.webp','W7-estanteria-1440.webp','W8-fachadad-1440.webp','W9-fachadan-1440.webp'
    ].forEach(f=>P.push({title:'WELLNESS — ONLY YOU VALENCIA', img:'assets/proyectos/Well_OY/'+f, href:'proyectos/wellness-only-you/'}));

    // Glow
    [
      'G1-general-1440.webp','G3-recepcion-1440.webp','G4-tratamiento-1440.webp'
    ].forEach(f=>P.push({title:'SALÓN DE BELLEZA GLOW', img:'assets/proyectos/Glow/'+f, href:'proyectos/salon-belleza-glow/'}));

    // So Terrat
    [
      'S1-atardecer-1440.webp','S2-dia-1440.webp','S4-noche-1440.webp'
    ].forEach(f=>P.push({title:'PATIO EVENTOS SO TERRAT', img:'assets/proyectos/Soterrat/'+f, href:'proyectos/so-terrat/'}));

    const MAX_CARDS_DESKTOP = 5;
    const MAX_CARDS_MOBILE  = 3;

    const prefersReduced = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    function randomBetween(min,max){ return Math.random()*(max-min)+min; }
    function pickRandom(arr){ return arr[Math.floor(Math.random()*arr.length)]; }
    function isMobile(){ return window.matchMedia('(max-width: 900px)').matches; }

    // Zonas seguras: inferior (footer+mslog) y superior (logo/asterisco)
    function getOffsets(){
      const cs = getComputedStyle(document.documentElement);
      const footer = parseFloat(cs.getPropertyValue('--footer-offset')) || 0;
      const msbar  = parseFloat(cs.getPropertyValue('--msbar-offset'))  || 0;

      let safeTop = 0;
      const logo = document.getElementById('logoVelat');
      const ast  = document.getElementById('asteriskWrap');
      const padTop = 10;
      if (logo){
        const r = logo.getBoundingClientRect();
        safeTop = Math.max(safeTop, Math.max(0, r.bottom) + padTop);
      }
      if (ast){
        const r = ast.getBoundingClientRect();
        safeTop = Math.max(safeTop, Math.max(0, r.bottom) + padTop);
      }

      const extraMobile = isMobile() ? 14 : 0;
      return { top: safeTop + extraMobile, bottom: Math.max(footer, msbar) + (isMobile()?24:10) };
    }

    function activeCount(){ return document.querySelectorAll('.glitch-card').length; }

    function spawnGlitchCard(){
      const cap = isMobile() ? MAX_CARDS_MOBILE : MAX_CARDS_DESKTOP;
      if (activeCount() >= cap) return;

      const proj = pickRandom(P);
      const card = document.createElement('a');
      card.className = 'glitch-card';
      card.href = proj.href;
      card.setAttribute('aria-label', proj.title);

      // Tamaños
      const w = Math.round(isMobile() ? randomBetween(140, 240) : randomBetween(220, 520));
      const hRatio = randomBetween(0.60, 0.90);
      const fontPx = Math.round(isMobile() ? randomBetween(9, 11) : randomBetween(10, 12));
      const captionH = Math.round(fontPx * 1.6);
      const totalH = Math.round(w*hRatio) + captionH + 4;

      // Posición segura
      const padX = 12;
      const { top: safeTop, bottom: safeBottom } = getOffsets();
      const maxX = Math.max(0, window.innerWidth - w - padX);
      const maxY = Math.max(0, window.innerHeight - totalH - padX - safeBottom);
      const minY = Math.max(padX, Math.min(safeTop, Math.max(0, window.innerHeight - totalH - padX - safeBottom)));
      const x = Math.round(randomBetween(padX, Math.max(padX, maxX)));
      const y = Math.round(randomBetween(minY, Math.max(minY, maxY)));

      card.style.left = x + 'px';
      card.style.top  = y + 'px';
      card.style.width = w + 'px';

      const thumb = document.createElement('div');
      thumb.className = 'thumb';
      thumb.style.paddingBottom = (hRatio*100)+'%';
      thumb.style.backgroundImage = `url('${proj.img}')`;

      const caption = document.createElement('div');
      caption.className = 'caption';
      caption.style.fontSize = fontPx + 'px';
      const type = document.createElement('span'); type.className = 'type';
      const caret = document.createElement('span'); caret.className = 'caret';
      caption.appendChild(type); caption.appendChild(caret);

      card.appendChild(thumb);
      card.appendChild(caption);
      document.body.appendChild(card);

      // Hover → glitch + color
      card.addEventListener('mouseenter', ()=>{
        card.classList.add('glitching');
        clearTimeout(card._g); card._g=setTimeout(()=> card.classList.remove('glitching'), 180);
        thumb.style.filter='none';
      });
      card.addEventListener('mouseleave', ()=>{ thumb.style.filter='grayscale(1) contrast(1.05)'; });

      // Tipeo del título
      const text = '> ' + proj.title;
      let i = 0;
      const tick = () => {
        if (i <= text.length){
          type.textContent = text.slice(0,i);
          i++;
          type._timer = setTimeout(tick, 20);
        }
      };
      tick();

      // —— CLICK: View Transitions o fallback overlay —— 
      function supportsViewTransitions(){
        return 'startViewTransition' in document && 'animate' in document.documentElement;
      }
      function slugFromHref(href){
        try{
          const u = new URL(href, location.href);
          const parts = u.pathname.replace(/\/+$/,'').split('/');
          return parts[parts.length-1] || parts[parts.length-2] || 'proj';
        }catch(_){ return 'proj'; }
      }
      card.addEventListener('click', (e)=>{
        e.preventDefault();
        const href = card.getAttribute('href');
        const slug = slugFromHref(href);
        const vtName = 'vt-proj-' + slug;

        if (supportsViewTransitions()){
          thumb.style.viewTransitionName = vtName;
          try{ sessionStorage.setItem('vt-name', vtName); }catch(_){}
          document.startViewTransition(()=>{ location.href = href; });
          return;
        }

        // Fallback: clon + zoom
        const r = thumb.getBoundingClientRect();
        const clone = thumb.cloneNode(true);
        clone.style.position = 'fixed';
        clone.style.left = r.left + 'px';
        clone.style.top = r.top + 'px';
        clone.style.width = r.width + 'px';
        clone.style.height = r.height + 'px';
        clone.style.padding = 0;
        clone.style.zIndex = 9999;
        clone.style.transition = 'transform .38s cubic-bezier(.2,.8,.2,1), opacity .38s';
        clone.style.transformOrigin = 'center center';
        clone.style.opacity = '1';
        document.body.appendChild(clone);

        const scaleX = window.innerWidth  / r.width;
        const scaleY = window.innerHeight / r.height;
        const scale = Math.min(scaleX, scaleY) * 1.02;
        const cx = r.left + r.width/2;
        const cy = r.top  + r.height/2;
        const tx = (window.innerWidth/2  - cx);
        const ty = (window.innerHeight/2 - cy);

        requestAnimationFrame(()=>{ clone.style.transform = `translate(${tx}px, ${ty}px) scale(${scale})`; });
        clone.addEventListener('transitionend', ()=>{ location.href = href; }, {once:true});
      });

      // Vida 3–4 s
      const life = Math.round(randomBetween(3000, 4000));
      const kill = () => {
        card.classList.add('fade-out');
        clearTimeout(type._timer);
        setTimeout(()=>{ try{ card.remove(); }catch(_){} }, 180);
      };
      card._life = setTimeout(kill, life);
      card.addEventListener('mouseenter', ()=>{ clearTimeout(card._life); card._life = setTimeout(kill, 1600); });
    }

    // Desktop: clic en la V → spawnea
    const Vnode = document.getElementById('glitchV');
    if (Vnode){
      Vnode.addEventListener('click', (e)=>{ e.preventDefault(); if (!isMobile()) spawnGlitchCard(); });
    }

   // ===== MÓVIL: pulso de glitch automático con alternancia color ↔ B/N =====
let mobileGlitchColor = false; // false = empieza en B/N

function pulseOneMobile(){
  if (!isMobile() || prefersReduced) return;

  const cards = document.querySelectorAll('.glitch-card');
  if (!cards.length) return;

  const card = cards[Math.floor(Math.random()*cards.length)];
  const thumb = card.querySelector('.thumb');
  if (!thumb) return;

  const GLITCH_MS = 220; // duración del glitch
  mobileGlitchColor = !mobileGlitchColor; // alterna estado global

  // Limpia cualquier pulso previo
  clearTimeout(card._pulseT);

  // Activa glitch visual
  card.classList.add('glitching');

  // Define filtro según el estado
  if (mobileGlitchColor) {
    // Pasa a color
    thumb.style.filter = 'none';
  } else {
    // Pasa a blanco y negro
    thumb.style.filter = 'grayscale(1) contrast(1.05)';
  }

  // Quita el efecto “glitching” tras el tiempo
  card._pulseT = setTimeout(()=>{
    card.classList.remove('glitching');
  }, GLITCH_MS);
}


    function ensureMobilePulser(){
      if (!isMobile() || prefersReduced){
        clearInterval(ensureMobilePulser._h); ensureMobilePulser._h=null;
        return;
      }
      if (ensureMobilePulser._h) return;
      // Pulso cada 1.5 s
      ensureMobilePulser._h = setInterval(pulseOneMobile, 1500);
    }

    // Spawners
    function ensureMobileSpawner(){
      if (!isMobile()){ clearInterval(ensureMobileSpawner._h); ensureMobileSpawner._h=null; return; }
      if (ensureMobileSpawner._h) return;
      ensureMobileSpawner._h = setInterval(()=>{ spawnGlitchCard(); }, 3000);
    }
    function ensureDesktopSpawner(){
      if (isMobile()){ clearInterval(ensureDesktopSpawner._h); ensureDesktopSpawner._h=null; return; }
      if (ensureDesktopSpawner._h) return;
      ensureDesktopSpawner._h = setInterval(()=>{ spawnGlitchCard(); }, 3500);
    }

    // Inicialización
    ensureMobileSpawner();
    ensureDesktopSpawner();
    ensureMobilePulser();

    window.addEventListener('resize', ()=>{
      ensureMobileSpawner();
      ensureDesktopSpawner();
      ensureMobilePulser();
    });
  })();

  </script>
</body>
</html>
