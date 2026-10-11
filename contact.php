<?php
require_once __DIR__.'/includes/config.php';
session_start();
$errors=[];$sent=false;
if(empty($_SESSION['t']))$_SESSION['t']=bin2hex(random_bytes(16));
if($_SERVER['REQUEST_METHOD']==='POST'){
  if(!hash_equals($_SESSION['t'],(string)($_POST['t']??'')))$errors[]='Session expired. Please try again.';
  elseif(!empty($_POST['website']))$sent=true;
  else{
    $f=[];foreach(['parent','phone','child','grade','message'] as $k)$f[$k]=cut_text(strip_tags(trim((string)($_POST[$k]??''))),0,1000);
    if($f['parent']==='')$errors[]='Please enter the parent name.';
    if(!preg_match('/^[0-9+\-\s]{8,15}$/',$f['phone']))$errors[]='Please enter a valid phone number.';
    if(!$errors){if(save_enquiry($f)){$sent=true;$_POST=[];$_SESSION['t']=bin2hex(random_bytes(16));}else $errors[]='Could not save your enquiry. Please call us instead.';}
  }
}

$pageTitle='Contact';$current='contact';require __DIR__.'/includes/header.php';
banner('Contact','Come visit <em>Prakruthi</em>','We would love to meet you and your child.','img-5.jpg');
?>
<section class="sec"><div class="w contact">
  <div class="rv">
    <span class="eyebrow">Get in Touch</span>
    <h2>We're here to help.</h2>
    <p class="lead mt">Questions about admissions, classes or a campus visit? Reach us directly or send an enquiry.</p>
    <ul class="info">
      <li><span class="ic"><?= icon('phone') ?></span><div><small>Phone</small><a href="tel:<?= e(SCHOOL_PHONE_TEL) ?>"><?= e(SCHOOL_PHONE) ?></a></div></li>
      <li><span class="ic ic-wa"><?= icon('chat') ?></span><div><small>WhatsApp</small><a href="https://wa.me/<?= e(SCHOOL_WHATSAPP) ?>?text=<?= rawurlencode(WHATSAPP_TEXT) ?>" target="_blank" rel="noopener">Chat with us</a></div></li>
      <li><span class="ic"><?= icon('mail') ?></span><div><small>Email</small><a href="mailto:<?= e(SCHOOL_EMAIL) ?>"><?= e(SCHOOL_EMAIL) ?></a></div></li>
      <li><span class="ic"><?= icon('pin') ?></span><div><small>Address</small><b><?= e(SCHOOL_ADDRESS) ?></b></div></li>
      <li><span class="ic"><?= icon('clock') ?></span><div><small>School Hours</small><b><?= e(SCHOOL_HOURS) ?></b></div></li>
    </ul>
    <a class="btn btn-dark mt" target="_blank" rel="noopener" href="https://www.google.com/maps/search/Prakruthi+Techno+School+Gajanur"><?= icon('nav') ?>Get Directions</a>
  </div>
  <div class="card-f rv" id="contact-form">
    <h3>Send an enquiry</h3><p>We will call you back soon.</p>
    <?php enquiry_form($sent,$errors); ?>
  </div>
</div></section>
<?php require __DIR__.'/includes/footer.php'; ?>
