<?php require_once __DIR__.'/config.php'; require_once __DIR__.'/ui.php'; require_once __DIR__.'/sections.php';
$nav=['home'=>['Home','index.php'],'about'=>['About','about.php'],'academics'=>['Academics','academics.php'],'facilities'=>['Facilities','facilities.php'],'activities'=>['Activities','activities.php'],'gallery'=>['Gallery','gallery.php'],'admissions'=>['Admissions','admissions.php'],'contact'=>['Contact','contact.php']];
?><!DOCTYPE html>
<html lang="en"><head><meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
<title><?= e($pageTitle) ?> – <?= e(SCHOOL_NAME) ?></title>
<meta name="description" content="Prakruthi Techno School, Gajanur, Shivamogga – Smart Learning for Tomorrow. Admissions open Nursery to Grade V.">
<meta name="theme-color" content="#ffffff">
<link rel="icon" href="assets/images/logo.png">
<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Inter+Tight:wght@600;700&family=Playfair+Display+SC:wght@700;900&display=swap">
<link rel="stylesheet" href="assets/css/style.css">
<script>document.documentElement.classList.add('js')</script>
</head><body>
<a class="skip" href="#main">Skip to content</a>

<div class="topbar"><div class="w">
  <span><?= icon('pin') ?><?= e(SCHOOL_ADDRESS) ?></span>
  <span><?= icon('clock') ?><?= e(SCHOOL_HOURS) ?></span>
  <span class="tb-r"><a href="tel:<?= e(SCHOOL_PHONE_TEL) ?>"><?= icon('phone') ?><?= e(SCHOOL_PHONE) ?></a><a href="mailto:<?= e(SCHOOL_EMAIL) ?>"><?= icon('mail') ?><?= e(SCHOOL_EMAIL) ?></a></span>
</div></div>

<header class="hd" id="hd"><div class="w hd-in">
  <a class="brand" href="index.php"><img src="assets/images/logo.png" width="52" height="52" alt=""><?= wordmark() ?></a>
  <nav class="nav" aria-label="Main"><?php foreach($nav as $k=>$v): ?><a href="<?= $v[1] ?>"<?= $current===$k?' class="act" aria-current="page"':'' ?>><?= $v[0] ?></a><?php endforeach; ?></nav>
  <div class="hd-act">
    <a class="btn btn-sun hd-cta" href="contact.php">Enquire Now<?= icon('arrow') ?></a>
    <a class="ib hd-call" href="tel:<?= e(SCHOOL_PHONE_TEL) ?>" aria-label="Call <?= e(SCHOOL_PHONE) ?>"><?= icon('phone') ?></a>
    <button class="ib hd-menu" id="mb" type="button" aria-label="Open menu" aria-expanded="false" aria-controls="drawer"><?= icon('menu') ?></button>
  </div>
</div></header>

<div class="drawer" id="drawer" aria-hidden="true" inert>
  <div class="drawer-bg" data-close></div>
  <div class="drawer-pn" role="dialog" aria-modal="true" aria-label="Menu">
    <div class="drawer-hd"><a class="brand" href="index.php"><img src="assets/images/logo.png" width="40" height="40" alt=""><?= wordmark() ?></a><button class="ib drawer-x" type="button" data-close aria-label="Close menu"><?= icon('x') ?></button></div>
    <nav aria-label="Mobile"><?php foreach($nav as $k=>$v): ?><a href="<?= $v[1] ?>"<?= $current===$k?' class="act" aria-current="page"':'' ?>><?= $v[0] ?><?= icon('chev-r') ?></a><?php endforeach; ?></nav>
    <div class="drawer-ft">
      <div class="btns"><a class="btn btn-line" href="tel:<?= e(SCHOOL_PHONE_TEL) ?>"><?= icon('phone') ?>Call</a><a class="btn btn-sun" href="contact.php">Enquire<?= icon('arrow') ?></a></div>
      <p><?= icon('pin') ?><?= e(SCHOOL_ADDRESS) ?></p>
    </div>
  </div>
</div>
<main id="main">
