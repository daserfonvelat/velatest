<?php
// Ajusta datos reales
$org = [
  "@context" => "https://schema.org",
  "@type"    => "Organization",
  "name"     => "VELAT Studio",
  "url"      => "https://www.velatstudio.com",
  "logo"     => "https://www.velatstudio.com/assets/logo40.png",
  "telephone"=> "+34 625 893 300",
  "address"  => [
    "@type" => "PostalAddress",
    "addressLocality" => "Valencia",
    "addressCountry"  => "ES"
  ],
  "sameAs"   => [
    "https://www.instagram.com/velat_.studio/"
  ]
];

$service = [
  "@context"   => "https://schema.org",
  "@type"      => "ProfessionalService",
  "name"       => "VELAT Studio",
  "areaServed" => "Spain",
  "serviceType"=> [
    "Interiorismo",
    "Arquitectura",
    "Dirección de obra",
    "Mobiliario a medida",
    "Diseño e identidad de marca",
    "Arquitectura efímera"
  ]
];
?>
<script type="application/ld+json"><?= json_encode($org, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE) ?></script>
<script type="application/ld+json"><?= json_encode($service, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE) ?></script>
