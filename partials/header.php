<header id="velat-header" class="site-header">
  <!-- Logo -->
  <a href="<?= $ASSET_BASE ?? '' ?>/index.php" class="site-logo" aria-label="Ir a inicio">
    <img
      src="<?= $ASSET_BASE ?? '' ?>/assets/logo100.png"
      alt="VELAT Studio"
      class="site-logo-img"
      width="182"
      height="40"
      decoding="async"
      fetchpriority="high"
    >
  </a>

  <!-- Asterisco (link contacto) -->
  <a href="<?= $ASSET_BASE ?? '' ?>/contacto.php" class="header-asterisk" aria-label="Contacto">
    <svg viewBox="0 0 32 32" class="header-asterisk-svg" width="34" height="34" aria-hidden="true">
      <g stroke="#111" stroke-width="4" stroke-linecap="round" fill="none">
        <line x1="16" y1="3"  x2="16" y2="29"/>
        <line x1="4.5" y1="8.5"  x2="27.5" y2="23.5"/>
        <line x1="4.5" y1="23.5" x2="27.5" y2="8.5"/>
      </g>
    </svg>
  </a>

  <!-- Estilos específicos del header + mensaje MS-DOS -->
  <style>
    #velat-header{
      position:fixed; 
      top:0; left:0; right:0;
      height:68px; /* más alto para dar aire */
      z-index:500;
      display:flex; 
      align-items:center; 
      justify-content:space-between; 
      padding:6px 16px 0; /* margen superior */
      background:rgba(255,255,255,.35); 
      -webkit-backdrop-filter:blur(12px); 
      backdrop-filter:blur(12px);
      border-bottom:1px solid rgba(0,0,0,.08);
      font-family:'ABCGaisyr','Courier New',monospace;
      overflow:hidden; /* evita que el brillo ::after tape todo */
    }
    #velat-header .site-logo{ 
      display:inline-flex; 
      align-items:center; 
      height:68px; 
      line-height:0; 
    }
    #velat-header .site-logo img{
      width:182px !important; 
      height:auto !important; 
      max-width:24vw !important;
      opacity:.85; 
      transition:transform .2s ease, opacity .2s ease, filter .2s ease;
      margin-top:4px; /* separación superior */
    }
    #velat-header .site-logo img:hover{ transform:scale(1.03); opacity:.95; filter:contrast(1.05); }

    #velat-header .header-asterisk{
      position:absolute; 
      top:17px; 
      right:12px;
      display:inline-flex; 
      align-items:center; 
      justify-content:center;
      width:34px; height:34px; 
      text-decoration:none; 
      opacity:.95;
      transition:transform .25s ease, filter .25s ease, opacity .25s ease;
      z-index:510;
    }
    #velat-header .header-asterisk:hover{ transform:scale(1.07); filter:brightness(1.05) contrast(1.05); opacity:.85; }
    #velat-header .header-asterisk-svg{ display:block; width:34px; height:34px; }

    /* —— Sheen/luz sobre el glass —— */
    #velat-header::after{
      content:'';
      position:absolute;
      inset:0; /* limitado solo al header */
      pointer-events:none;
      mix-blend-mode:normal;
      opacity:.35;
      transition:opacity .25s ease;
      background:
        radial-gradient(160px 54px at var(--mx,80%) var(--my,-10%),
          rgba(255,255,255,.35) 0%,
          rgba(255,255,255,.15) 35%,
          transparent 70%);
      filter:blur(.2px);
      z-index:1;
    }
    #velat-header:hover::after{ opacity:.75; }

    @media (hover:none){
      #velat-header::after{
        opacity:.4;
        animation:sheen-scan 4.2s linear infinite;
      }
    }
    @keyframes sheen-scan{
      0%   { --mx:-10%; }
      100% { --mx:110%; }
    }
    @media (prefers-reduced-motion:reduce){
      #velat-header::after{ display:none; }
    }

    /* —— Mensaje MS-DOS a la IZQUIERDA del asterisco —— */
    #asterisk-msg{
      position:absolute;
      top:12px;
      right:56px;
      text-align:right;
      color:#111;
      font-size:15px;
      letter-spacing:.6px;
      line-height:1.1;
      text-transform:uppercase;
      white-space:nowrap;
      user-select:none;
      pointer-events:none;
      opacity:0;
      transition:opacity .18s ease;
      z-index:509;
    }
    #asterisk-msg .line, #asterisk-msg .line2{ display:inline-block; }
    #asterisk-msg .cursor{
      display:inline-block;
      width:auto;
      margin-left:1px;
      animation: blink 1s steps(2, start) infinite;
    }
    #asterisk-msg .arrow{
      display:inline-block;
      margin-left:6px;
      transform: translateY(1px);
    }
    #asterisk-msg.show{ opacity:1; }
    @keyframes blink { 50% { opacity:0; } }

    /* —— Móvil —— */
    @media (max-width:900px){
      #velat-header{ height:60px; padding-top:4px; }
      #velat-header .site-logo{ height:60px; }
      #velat-header .site-logo img{ width:160px !important; max-width:44vw !important; }
      #velat-header .header-asterisk, #velat-header .header-asterisk-svg{ width:32px; height:32px; top:14px; right:10px; }

      #asterisk-msg{
        font-size:10.8px;
        top:10px;
        right:48px;
        white-space:normal;
        line-height:1.25;
        max-width:45vw;
      }
      #asterisk-msg .line{
        display:block;
        margin-bottom:1px;
      }
      #asterisk-msg .line2{
        display:block;
      }
      #asterisk-msg .arrow{
        display:inline-block;
        margin-left:4px;
        transform:translateY(1px);
      }
    }
  </style>

  <!-- Contenedor del mensaje -->
  <div id="asterisk-msg" aria-hidden="true">
    <span class="line"></span>
    <span class="line2" style="display:none;"></span>
    <span class="cursor">_</span>
    <span class="arrow" style="display:none;">&gt;</span>
  </div>

  <!-- Lógica: escritura lenta y humana -->
  <script>
  (function(){
    const box = document.getElementById('asterisk-msg');
    const line1 = box.querySelector('.line');
    const line2 = box.querySelector('.line2');
    const cursorEl = box.querySelector('.cursor');
    const arrowEl = box.querySelector('.arrow');

    const FIRST_DELAY = 5000;
    const LOOP_DELAY  = 20000;
    const HOLD_TIME   = 5600;

    const TYPE_MIN = 90, TYPE_MAX = 170;

    function isMobile(){ return window.matchMedia('(max-width: 900px)').matches; }
    let busy = false;

    function typeText(targetEl, text, cb){
      let i = 0;
      function tick(){
        if (i <= text.length){
          targetEl.textContent = text.slice(0, i);
          i++;
          const dt = Math.floor(Math.random()*(TYPE_MAX-TYPE_MIN+1))+TYPE_MIN;
          setTimeout(tick, dt);
        } else cb && cb();
      }
      tick();
    }

    function typeOnce(){
      if (busy) return;
      busy = true;

      box.classList.add('show');
      box.setAttribute('aria-hidden','false');

      line1.textContent = '';
      line2.textContent = '';
      line2.style.display = isMobile() ? 'block' : 'none';
      arrowEl.style.display = 'none';
      cursorEl.style.display = 'inline-block';

      if (isMobile()){
        const TEXT1 = 'CUÉNTANOS';
        const TEXT2 = 'TU PROYECTO';

        typeText(line1, TEXT1, ()=>{
          setTimeout(()=>{
            typeText(line2, TEXT2, ()=>{
              line2.appendChild(cursorEl);
              arrowEl.style.display = 'inline-block';
              line2.appendChild(arrowEl);
              setTimeout(hideMsg, HOLD_TIME);
            });
          }, 200);
        });

      } else {
        const TEXT = 'CUÉNTANOS TU PROYECTO';
        typeText(line1, TEXT, ()=>{
          arrowEl.style.display = 'inline-block';
          setTimeout(hideMsg, HOLD_TIME);
        });
      }
    }

    function hideMsg(){
      box.classList.remove('show');
      box.setAttribute('aria-hidden','true');
      setTimeout(()=>{
        line1.textContent = '';
        line2.textContent = '';
        arrowEl.style.display = 'none';
        cursorEl.style.display = 'inline-block';
        box.appendChild(cursorEl);
        busy = false;
      }, 200);
    }

    setTimeout(typeOnce, FIRST_DELAY);
    setInterval(()=>{ if (!busy) typeOnce(); }, LOOP_DELAY);
  })();

  // —— Sheen interactivo —— 
  (function(){
    const hdr = document.getElementById('velat-header');
    if(!hdr) return;

    const noHover = window.matchMedia && window.matchMedia('(hover: none)').matches;
    if (noHover) return;

    let raf = null;
    function onMove(e){
      const r = hdr.getBoundingClientRect();
      const x = ((e.clientX - r.left) / r.width)  * 100;
      const y = ((e.clientY - r.top)  / r.height) * 100;
      if (raf) cancelAnimationFrame(raf);
      raf = requestAnimationFrame(()=>{
        hdr.style.setProperty('--mx', x + '%');
        hdr.style.setProperty('--my', y + '%');
      });
    }

    hdr.addEventListener('mousemove', onMove, {passive:true});
    hdr.addEventListener('mouseleave', ()=>{
      hdr.style.removeProperty('--mx');
      hdr.style.removeProperty('--my');
    });
  })();
  </script>
</header>
