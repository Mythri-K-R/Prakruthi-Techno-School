<?php
// Inline line icons (24x24, stroke = currentColor)
function icon($n,$cls=''){
  static $p=[
    'arrow'=>'<path d="M5 12h14M13 5l7 7-7 7"/>',
    'chev-r'=>'<path d="m9 18 6-6-6-6"/>',
    'chev-l'=>'<path d="m15 18-6-6 6-6"/>',
    'menu'=>'<path d="M4 7h16M4 12h16M4 17h16"/>',
    'x'=>'<path d="M18 6 6 18M6 6l12 12"/>',
    'check'=>'<path d="M20 6 9 17l-5-5"/>',
    'phone'=>'<path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.1 4.2 2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1 1 .4 1.9.7 2.8a2 2 0 0 1-.5 2.1L8.1 9.9a16 16 0 0 0 6 6l1.3-1.3a2 2 0 0 1 2.1-.4c.9.3 1.9.6 2.8.7a2 2 0 0 1 1.7 2z"/>',
    'mail'=>'<rect x="2" y="4" width="20" height="16" rx="2"/><path d="m22 7-10 6L2 7"/>',
    'pin'=>'<path d="M20 10c0 6-8 12-8 12S4 16 4 10a8 8 0 0 1 16 0z"/><circle cx="12" cy="10" r="3"/>',
    'clock'=>'<circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/>',
    'nav'=>'<path d="m3 11 19-9-9 19-2-8z"/>',
    'shapes'=>'<circle cx="7" cy="7" r="4"/><rect x="13" y="13" width="8" height="8" rx="1.5"/><path d="M17.5 2.5 21.5 10h-8z"/><path d="M3 14h7v7H3z"/>',
    'flask'=>'<path d="M9 3h6M10 3v6L4.5 19a1.5 1.5 0 0 0 1.3 2h12.4a1.5 1.5 0 0 0 1.3-2L14 9V3"/><path d="M7.5 15h9"/>',
    'sprout'=>'<path d="M12 22V11"/><path d="M12 11C12 7 9 4 4 4c0 4 3 7 8 7z"/><path d="M12 14c0-4 3-6.5 8-6.5 0 4-3 6.5-8 6.5z"/>',
    'bulb'=>'<path d="M9 18h6M10 22h4"/><path d="M12 2a7 7 0 0 0-4 12.7c.6.5 1 1.3 1 2.3h6c0-1 .4-1.8 1-2.3A7 7 0 0 0 12 2z"/>',
    'smile'=>'<circle cx="12" cy="12" r="10"/><path d="M8 14s1.5 2 4 2 4-2 4-2M9 9h.01M15 9h.01"/>',
    'shield'=>'<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="m9 12 2 2 4-4"/>',
    'monitor'=>'<rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/>',
    'book'=>'<path d="M2 4h7a3 3 0 0 1 3 3v14a2 2 0 0 0-2-2H2z"/><path d="M22 4h-7a3 3 0 0 0-3 3v14a2 2 0 0 1 2-2h8z"/>',
    'ball'=>'<circle cx="12" cy="12" r="10"/><path d="m12 7 4.5 3.2-1.7 5.3H9.2L7.5 10.2z"/><path d="M12 2v5M21.5 9.5l-5 .7M18 20l-3.2-4.5M6 20l3.2-4.5M2.5 9.5l5 .7"/>',
    'palette'=>'<path d="M12 2a10 10 0 0 0 0 20c1 0 1.7-.8 1.7-1.7 0-.4-.2-.8-.4-1.1-.3-.3-.4-.7-.4-1.1 0-.9.8-1.7 1.7-1.7h2A5.6 5.6 0 0 0 22 11c0-5-4.5-9-10-9z"/><circle cx="7.5" cy="11" r="1"/><circle cx="10" cy="6.5" r="1"/><circle cx="15" cy="6.5" r="1"/>',
    'tree'=>'<path d="M12 22v-7M9 22h6"/><path d="M12 15a6 6 0 0 0 4.5-10A5 5 0 0 0 7.5 5 6 6 0 0 0 12 15z"/>',
    'users'=>'<path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.9M16 3.1a4 4 0 0 1 0 7.8"/>',
    'target'=>'<circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="6"/><circle cx="12" cy="12" r="2"/>',
    'eye'=>'<path d="M2 12s3.5-7 10-7 10 7 10 7-3.5 7-10 7S2 12 2 12z"/><circle cx="12" cy="12" r="3"/>',
    'heart'=>'<path d="M20.8 4.6a5.5 5.5 0 0 0-7.8 0L12 5.7l-1-1.1a5.5 5.5 0 0 0-7.8 7.8L12 21.2l8.8-8.8a5.5 5.5 0 0 0 0-7.8z"/>',
    'robot'=>'<rect x="4" y="8" width="16" height="12" rx="2"/><path d="M12 8V4M9 4h6M2 13v3M22 13v3"/><circle cx="9" cy="14" r="1.2"/><circle cx="15" cy="14" r="1.2"/>',
    'globe'=>'<circle cx="12" cy="12" r="10"/><path d="M2 12h20M12 2a15 15 0 0 1 0 20M12 2a15 15 0 0 0 0 20"/>',
    'cap'=>'<path d="M22 10 12 5 2 10l10 5 10-5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/>',
    'file'=>'<path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><path d="M14 2v6h6M8 13h8M8 17h5"/>',
    'chat'=>'<path d="M7.9 20A9 9 0 1 0 4 16.1L2 22z"/>',
    'facebook'=>'<path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/>',
    'instagram'=>'<rect x="2" y="2" width="20" height="20" rx="5"/><circle cx="12" cy="12" r="4"/><path d="M17.5 6.5h.01"/>',
    'youtube'=>'<path d="M2.5 17a24 24 0 0 1 0-10 2 2 0 0 1 1.4-1.4 49.6 49.6 0 0 1 16.2 0A2 2 0 0 1 21.5 7a24 24 0 0 1 0 10 2 2 0 0 1-1.4 1.4 49.6 49.6 0 0 1-16.2 0A2 2 0 0 1 2.5 17"/><path d="m10 15 5-3-5-3z"/>',
    'quote'=>'<path d="M3 21c3 0 7-1 7-8V5c0-1.3-.8-2-2-2H4c-1.3 0-2 .8-2 2v6c0 1.3.8 2 2 2 1 0 1 0 1 1v1c0 1-1 2-2 2s-1 0-1 1v3c0 1 0 1 1 1z"/><path d="M15 21c3 0 7-1 7-8V5c0-1.3-.8-2-2-2h-4c-1.3 0-2 .8-2 2v6c0 1.3.8 2 2 2h.8c0 2.3.2 4-2.8 4v3c0 1 0 1 1 1z"/>',
    'calc'=>'<rect x="4" y="2" width="16" height="20" rx="2"/><path d="M8 6h8M8 10h.01M12 10h.01M16 10h.01M8 14h.01M12 14h.01M16 14h.01M8 18h.01M12 18h.01M16 18h.01"/>',
    'home'=>'<path d="M3 21h18M5 21V9l7-5 7 5v12"/><path d="M10 21v-6h4v6"/>',
  ];
  return '<svg class="i i-'.$n.($cls?' '.$cls:'').'" viewBox="0 0 24 24" aria-hidden="true">'.($p[$n]??'').'</svg>';
}

// Inner-page banner. $title may contain <em> for the highlighted word.
function banner($eyebrow,$title,$lead,$img){
  global $pageTitle; ?>
<section class="pb">
  <img class="pb-img" src="assets/images/<?= e($img) ?>" alt="">
  <div class="w">
    <nav class="crumb" aria-label="Breadcrumb"><a href="index.php">Home</a><?= icon('chev-r') ?><span><?= e($pageTitle) ?></span></nav>
    <span class="eyebrow"><?= e($eyebrow) ?></span>
    <h1><?= $title ?></h1>
    <p><?= e($lead) ?></p>
  </div>
</section>
<?php }

// School name wordmark: serif "PRAKRUTHI", orange "TECHNO SCHOOL" between rules, tagline below
function wordmark($cls=''){
  return '<span class="wm'.($cls?' '.$cls:'').'"><span class="wm-n">Prakruthi</span><span class="wm-s"><i>Techno School</i></span><span class="wm-t">Smart Learning for Tomorrow</span></span>';
}
