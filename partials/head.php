<?php
  // ——— Config por página ———
  $page_title   = $page_title   ?? 'VELAT Studio';
  $page_desc    = $page_desc    ?? 'Estudio de interiorismo: espacios que envuelven y transforman.';
  $og_type      = $og_type      ?? 'website';
  $og_site      = $og_site      ?? 'VELAT Studio';
  $twitter_site = $twitter_site ?? '@velatstudio';
  $meta_robots  = $meta_robots  ?? 'index, follow';
  $lang_html    = $lang_html    ?? 'es';

  // ——— Docroot público = /web → rutas públicas comienzan en /assets ———
  $ASSET_BASE = '';
  $V = '20251107'; // cache-buster

  // ——— Host y URL canónica ———
  $scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
  if (!empty($_SERVER['HTTP_X_FORWARDED_PROTO'])) $scheme = $_SERVER['HTTP_X_FORWARDED_PROTO'];
  $host    = $scheme . '://' . ($_SERVER['HTTP_HOST'] ?? 'localhost');
  $req_uri = $_SERVER['REQUEST_URI'] ?? '/';
  $page_url = $page_url ?? ($host . $req_uri);

  // ——— Imagen OG ———
  if (!empty($page_image)) {
    if (strpos($page_image, 'http') === 0) {
      $og_image = $page_image;
    } else {
      $rel = (strpos($page_image, '/') === 0) ? $page_image : ($ASSET_BASE . '/' . ltrim($page_image, './'));
      $og_image = $host . $rel;
    }
  } else {
    $og_image = $host . $ASSET_BASE . '/assets/share.jpg';
  }

  // ——— Rutas versiónadas (preload y uso deben coincidir) ———
  $font_href     = $ASSET_BASE . "/assets/fonts/Gaisyr.woff2?v=$V";
  $css_main_href = $ASSET_BASE . "/assets/css/base.css?v=$V";
  $css_site_href = $ASSET_BASE . "/assets/css/site.css?v=$V";
?>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<?php if ($meta_robots): ?>
<meta name="robots" content="<?= htmlspecialchars($meta_robots, ENT_QUOTES, 'UTF-8') ?>">
<?php endif; ?>

<title><?= htmlspecialchars($page_title, ENT_QUOTES, 'UTF-8') ?></title>
<meta name="description" content="<?= htmlspecialchars($page_desc, ENT_QUOTES, 'UTF-8') ?>" />
<meta name="author" content="VELAT Studio">
<meta name="language" content="es">
<meta property="og:locale" content="es_ES">
<meta name="theme-color" content="#ffffff" />

<!-- Favicons -->
<link rel="icon" href="<?= $ASSET_BASE ?>/assets/icono40.png" type="image/png" sizes="any">
<link rel="apple-touch-icon" href="<?= $ASSET_BASE ?>/assets/icono40.png">
<link rel="shortcut icon" href="<?= $ASSET_BASE ?>/assets/icono40.png" type="image/png">

<!-- Tipografía: preload y @font-face con la MISMA URL -->
<link rel="preload" href="<?= $font_href ?>" as="font" type="font/woff2" crossorigin>
<style>
@font-face{
  font-family:'ABCGaisyr';
  src:url('<?= $font_href ?>') format('woff2');
  font-weight:normal; font-style:normal; font-display:swap;
}
:root{ --fg:#232323; --bg:#ffffff; --muted:#666; --line:#ddd; --chip:#eee; --chip-h:#ddd; }
*{ box-sizing:border-box; }
html,body{ margin:0; background:var(--bg); color:var(--fg); font-family:'ABCGaisyr','Courier New',Courier,monospace; }
</style>

<!-- CSS global (preload y uso coinciden) -->
<link rel="preload" href="<?= $css_main_href ?>" as="style">
<link rel="stylesheet" href="<?= $css_main_href ?>" />
<link rel="stylesheet" href="<?= $css_site_href ?>" />

<!-- Canonical -->
<link rel="canonical" href="<?= htmlspecialchars($page_url, ENT_QUOTES, 'UTF-8') ?>">

<!-- Open Graph -->
<meta property="og:type" content="<?= htmlspecialchars($og_type, ENT_QUOTES, 'UTF-8') ?>">
<meta property="og:site_name" content="<?= htmlspecialchars($og_site, ENT_QUOTES, 'UTF-8') ?>">
<meta property="og:title" content="<?= htmlspecialchars($page_title, ENT_QUOTES, 'UTF-8') ?>">
<meta property="og:description" content="<?= htmlspecialchars($page_desc, ENT_QUOTES, 'UTF-8') ?>">
<meta property="og:url" content="<?= htmlspecialchars($page_url, ENT_QUOTES, 'UTF-8') ?>">
<meta property="og:image" content="<?= htmlspecialchars($og_image, ENT_QUOTES, 'UTF-8') ?>">

<!-- Twitter -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?= htmlspecialchars($page_title, ENT_QUOTES, 'UTF-8') ?>">
<meta name="twitter:description" content="<?= htmlspecialchars($page_desc, ENT_QUOTES, 'UTF-8') ?>">
<meta name="twitter:image" content="<?= htmlspecialchars($og_image, ENT_QUOTES, 'UTF-8') ?>">
<?php if (!empty($twitter_site)): ?>
<meta name="twitter:site" content="<?= htmlspecialchars($twitter_site, ENT_QUOTES, 'UTF-8') ?>">
<?php endif; ?>

<!-- Google Search Console -->
<meta name="google-site-verification" content="IUxHRCpz21rP1YWihxE_J14CHVxlgkny805kWRrzN6Q" />
