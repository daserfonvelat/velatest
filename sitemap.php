<?php
// /web/sitemap.php
// Genera un sitemap XML con cabeceras correctas, montando las URLs conocidas
// y añadiendo automáticamente lastmod a partir del archivo físico si existe.

$base = 'https://www.velatstudio.com';

// Lista base de URLs (añade aquí nuevas fichas cuando las crees)
$urls = [
  '/',                          // home
  '/proyectos/',                // parrilla de proyectos
  '/proyectos/neboeiro-de-toubes/',
  '/proyectos/sede-partido-politico/',
  '/proyectos/salon-belleza-glow/',
  '/proyectos/wellness-only-you/',
  '/proyectos/so-terrat/',
  '/proyectos/despachos-streamer/',
  '/proyectos/vivienda-ximo/',
];

// Intenta inferir lastmod mirando archivos index.php dentro de cada ruta “bonita”
function guess_lastmod(string $url): ?string {
  // Mapea /proyectos/slug/ -> /web/proyectos/slug/index.php (o .php directo si lo usas así)
  $docRoot = __DIR__;
  $path = parse_url($url, PHP_URL_PATH);

  // Rutas candidatas (ajusta si usas otra estructura)
  $candidates = [];
  if (substr($path, -1) === '/') {
    $candidates[] = $docRoot . $path . 'index.php';
  }
  // También probar sin barra final como archivo PHP
  $basename = basename(trim($path, '/'));
  if ($basename !== '') {
    $candidates[] = $docRoot . '/' . trim($path, '/') . '.php';
  }
  // Página proyectos.php
  if ($path === '/proyectos/') {
    $candidates[] = $docRoot . '/proyectos.php';
  }
  // Home
  if ($path === '/') {
    $candidates[] = $docRoot . '/index.php';
  }

  foreach ($candidates as $file) {
    if (is_file($file)) {
      $ts = filemtime($file);
      if ($ts) return gmdate('Y-m-d', $ts);
    }
  }
  return null;
}

header('Content-Type: application/xml; charset=UTF-8');
echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
<?php foreach ($urls as $u): 
  $loc = $base . $u;
  $lastmod = guess_lastmod($u);
  $priority = ($u==='/' ? '1.0' : ($u==='/proyectos/' ? '0.9' : '0.8'));
  $changefreq = ($u==='/' || $u==='/proyectos/' ? 'weekly' : 'monthly');
?>
  <url>
    <loc><?= htmlspecialchars($loc, ENT_XML1|ENT_COMPAT, 'UTF-8') ?></loc>
    <changefreq><?= $changefreq ?></changefreq>
    <priority><?= $priority ?></priority>
<?php if ($lastmod): ?>
    <lastmod><?= $lastmod ?></lastmod>
<?php endif; ?>
  </url>
<?php endforeach; ?>
</urlset>
