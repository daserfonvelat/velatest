<?php
  $page_title = 'Descúbrenos — velat_.studio';
  $page_desc  = 'Quiénes somos y cómo trabajamos en Velat.';
  $page_image     = '/assets/og/descubrenos.jpg';
  $og_type        = 'website';
  $twitter_site = '@velatstudio';
  $active       = 'descubrenos'; 
?>
<!DOCTYPE html>
<html lang="es">
<head><?php include __DIR__.'/partials/head.php'; ?></head>
<body>
<?php include __DIR__.'/partials/header.php'; ?>

<main class="main--wide">
  <style>
    /* ——— LAYOUT EDITORIAL ——— */
    .editorial-layout {
      display: grid;
      grid-template-columns: 1fr 340px; 
      gap: 60px;
      margin-bottom: 80px;
      align-items: start;
    }

    /* ——— TIPOGRAFÍA ——— */
    .manifesto {
      font-size: clamp(20px, 2.2vw, 28px);
      font-weight: 300;
      line-height: 1.4;
      letter-spacing: -0.01em;
      color: #111;
      margin-bottom: 32px;
    }
    .text-body {
      font-size: 16px;
      line-height: 1.65;
      color: #444;
      margin-bottom: 24px;
      max-width: 90%;
    }
    
    /* ——— VISUAL COL (DANIEL) ——— */
    .visual-col {
      position: sticky;
      top: 100px; 
      height: auto;
    }
    .portrait-wrapper { position: relative; }
    .portrait-img {
      width: 100%;
      height: auto;
      aspect-ratio: 3/4;
      object-fit: cover;
      filter: grayscale(100%) contrast(1.05);
      transition: filter 0.5s ease;
      display: block;
    }
    .portrait-wrapper:hover .portrait-img { filter: grayscale(0%) contrast(1); }
    
    .sys-label {
      font-family: 'Courier New', monospace;
      font-size: 11px;
      text-transform: uppercase;
      color: #888;
      margin-top: 8px;
      display: flex;
      justify-content: space-between;
    }

    /* ——— COLABORADORES (INTERACCIÓN DESPLEGABLE) ——— */
    .collab-section {
      margin-top: 60px;
      border-top: 1px solid #eee;
      padding-top: 40px;
    }
    .collab-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 32px;
      margin-top: 24px;
      align-items: start;
    }
    .collab-card {
      display: flex;
      align-items: flex-start; 
      gap: 16px;
      padding: 16px;
      background: #fafafa;
      border: 1px solid transparent;
      transition: all 0.3s ease;
      cursor: default;
      overflow: hidden;
    }
    .collab-card:hover {
      background: #fff;
      border-color: #ddd;
      box-shadow: 0 4px 12px rgba(0,0,0,0.03);
    }
    
    .collab-img {
      width: 70px; 
      height: auto; 
      border-radius: 2px;
      display: block;
      flex-shrink: 0;
    }

    .collab-info {
      display: flex;
      flex-direction: column;
      justify-content: flex-start;
      width: 100%;
    }
    
    .collab-info b { 
      display: block; 
      font-size: 14px; 
      margin-bottom: 4px; 
      color: #111; 
    }
    
    .collab-info .role {
      display: block;
      font-family: 'Courier New', monospace;
      font-size: 10px;
      text-transform: uppercase;
      color: #888;
      margin-bottom: 4px;
      letter-spacing: 0.5px;
    }

    .collab-info .desc { 
      display: block; 
      font-size: 13px; 
      line-height: 1.45; 
      color: #555;
      max-height: 0;
      opacity: 0;
      overflow: hidden;
      margin-top: 0;
      transition: all 0.4s cubic-bezier(0.25, 1, 0.5, 1);
    }

    .collab-card:hover .collab-info .desc {
      max-height: 200px; 
      opacity: 1;
      margin-top: 8px; 
      padding-top: 8px;
      border-top: 1px solid #eee; 
    }

    /* ——— CLIENTES (LIMPIO) ——— */
    .clients-list {
      list-style: none;
      padding: 0;
      margin: 20px 0 0 0;
      display: flex;
      flex-direction: column;
      gap: 16px;
    }
    .client-row {
      display: flex;
      align-items: center;
      gap: 24px;
      padding-bottom: 16px;
      border-bottom: 1px solid #f5f5f5;
    }
    
    /* SLOT DE IMAGEN: Sin borde, sin fondo */
    .client-img-slot {
      width: 120px;
      height: 60px;
      background: transparent; /* Transparente */
      border: none;            /* Sin borde */
      display: flex;
      align-items: center;
      justify-content: flex-start; /* Alineado a la izq */
      flex-shrink: 0;
    }
    
    .client-img-slot img {
      max-width: 100%;
      max-height: 100%;
      object-fit: contain;
      object-position: left center; /* Alineado a la izquierda */
    }

    .client-name {
      font-size: 15px;
      font-weight: 500;
      color: #333;
    }

    /* ——— RESPONSIVE ——— */
    @media (max-width: 900px) {
      .editorial-layout { grid-template-columns: 1fr; gap: 40px; }
      .visual-col { position: relative; top: 0; order: -1; }
      .portrait-img { aspect-ratio: 3/3.5; }
      .collab-info .desc { max-height: none; opacity: 1; margin-top: 8px; border-top: 1px solid #eee; padding-top: 8px;}
    }
  </style>

  <h1 style="margin-bottom: 40px; letter-spacing: 2px;">DESCÚBRENOS</h1>

  <div class="editorial-layout">
    
    <div class="content-col">
      <div class="manifesto">
        Velat nace como una forma de mirar lo que suele pasar desapercibido. Una mirada que interrumpe lo previsible y convierte cada espacio en un relato.
      </div>

      <div class="text-body">
        <p>
          Diseñamos lugares con intención, capaces de despertar el asombro. Creamos atmósferas que invitan a detenerse, a mirar otra vez, a descubrir lo que permanece velado.
        </p>
        <p>
          Esa forma de mirar convierte el interiorismo en algo más que una cuestión estética: es una herramienta para generar memoria y pertenencia. Buscamos que los espacios acompañen, transformen y sigan vivos con el paso del tiempo.
        </p>
        <p>
          Creemos en devolver el misterio a la arquitectura. En esa tensión entre lo que se percibe y lo que se intuye, Velat encuentra su sentido.
        </p>

        <div style="margin-top: 40px;">
          <h2 style="font-size: 1.1em; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 12px;">:: Equipo</h2>
          <p>
            <strong>Daniel Serra Font</strong> combina pensamiento conceptual y sensibilidad material. Su interés por lenguajes plásticos externos a la arquitectura —cine, videojuegos, literatura— le permite construir narrativas espaciales cargadas de intención.
          </p>
        </div>
      </div>

      <div class="collab-section">
        <h3 style="font-size: 14px; color: #999; text-transform: uppercase; letter-spacing: 1px;">> RED DE COLABORADORES</h3>
        
        <div class="collab-grid">
          
          <div class="collab-card">
            <img class="collab-img" src="/assets/info/irene.jpg" alt="Irene Usero">
            <div class="collab-info">
              <b>Irene Usero</b>
              <span class="role">DIRECCIÓN DE ARTE & DISEÑO</span>
              <span class="desc">Desarrolla la marca de forma integral, de la identidad conceptual a las aplicaciones físicas.</span>
            </div>
          </div>

          <div class="collab-card">
            <img class="collab-img" src="/assets/info/biendello.jpg" alt="Aránzazu Hortal">
            <div class="collab-info">
              <b>Aránzazu Hortal</b>
              <span class="role">INTERIORISMO & BELLAS ARTES</span>
              <span class="desc">Une concepto y materialidad con una sensibilidad plástica clara.</span>
            </div>
          </div>

          <div class="collab-card">
            <div class="collab-info">
              <b>Tomás Martínez</b>
              <span class="role">PAISAJISMO & URBANISMO</span>
              <span class="desc">Estrategias de paisaje y espacio público conectadas con la arquitectura.</span>
            </div>
          </div>

        </div>
      </div>

      <div class="collab-section">
        <h3 style="font-size: 14px; color: #999; text-transform: uppercase; letter-spacing: 1px;">> CLIENTES</h3>
        <ul class="clients-list">
          
          <li class="client-row">
            <div class="client-img-slot">
              <img src="/assets/info/Only you.png" alt="Only YOU Hotels">
            </div>
            <span class="client-name">Only YOU Hotels</span>
          </li>

          <li class="client-row">
            <div class="client-img-slot">
              <img src="/assets/info/Mislata.png" alt="Ayuntamiento de Mislata">
            </div>
            <span class="client-name">Ayuntamiento de Mislata</span>
          </li>

          <li class="client-row">
            <div class="client-img-slot">
              </div>
            <span class="client-name">Neboeiro de Toubes</span>
          </li>

        </ul>
      </div>

    </div>

    <div class="visual-col">
      <div class="portrait-wrapper">
        <img class="portrait-img" src="/assets/info/daniel.jpg" alt="Daniel Serra Font">
        <div class="sys-label">
          <span>> ID: DANIEL_SERRA</span>
          
        </div>
      </div>
    </div>

  </div>
</main>

<?php include __DIR__.'/partials/footer.php'; ?>
</body>
</html>