</main>
<?php if(!in_array($current,['contact','home'],true)): ?>
<section class="cta"><div class="w cta-in rv">
  <div class="cta-txt"><span class="eyebrow">Admissions Open · Nursery to Grade V</span><h2>Give your child a joyful start to learning.</h2><p>Talk to us about admissions, campus visits and classes.</p></div>
  <img class="cta-kid" src="assets/images/kid-girl.webp" width="612" height="900" alt="" loading="lazy">
  <div class="cta-btns"><a class="btn btn-line" href="tel:<?= e(SCHOOL_PHONE_TEL) ?>"><?= icon('phone') ?><?= e(SCHOOL_PHONE) ?></a><a class="btn btn-sun" href="contact.php">Enquire Now<?= icon('arrow') ?></a></div>
</div></section>
<?php endif; ?>
<footer class="ft"><div class="w">
  <div class="ft-grid">
    <div class="ft-brand"><a href="index.php"><img src="assets/images/logo.png" width="52" height="52" alt=""><?= wordmark() ?></a><p>Small steps today, big dreams tomorrow. Joyful, activity-based learning from Nursery to Grade V.</p>
      <?php $soc=array_filter(['facebook'=>SOCIAL_FACEBOOK,'instagram'=>SOCIAL_INSTAGRAM,'youtube'=>SOCIAL_YOUTUBE]); if($soc): ?><div class="soc"><?php foreach($soc as $n=>$u): ?><a href="<?= e($u) ?>" target="_blank" rel="noopener" aria-label="<?= ucfirst($n) ?>"><?= icon($n) ?></a><?php endforeach; ?></div><?php endif; ?></div>
    <div><h4>School</h4><ul><li><a href="about.php">About Us</a></li><li><a href="academics.php">Academics</a></li><li><a href="facilities.php">Facilities</a></li><li><a href="activities.php">Activities</a></li></ul></div>
    <div><h4>Explore</h4><ul><li><a href="gallery.php">Gallery</a></li><li><a href="admissions.php">Admissions</a></li><li><a href="contact.php">Contact</a></li><li><a href="contact.php#contact-form">Enquire Now</a></li></ul></div>
    <div class="ft-ct"><h4>Contact</h4><ul>
      <li><?= icon('phone') ?><a href="tel:<?= e(SCHOOL_PHONE_TEL) ?>"><?= e(SCHOOL_PHONE) ?></a></li>
      <li><?= icon('chat') ?><a href="https://wa.me/<?= e(SCHOOL_WHATSAPP) ?>" target="_blank" rel="noopener">WhatsApp us</a></li>
      <li><?= icon('mail') ?><a href="mailto:<?= e(SCHOOL_EMAIL) ?>"><?= e(SCHOOL_EMAIL) ?></a></li>
      <li><?= icon('pin') ?><span><?= e(SCHOOL_ADDRESS) ?></span></li>
      <li><?= icon('clock') ?><span><?= e(SCHOOL_HOURS) ?></span></li>
    </ul></div>
  </div>
  <div class="ft-bot"><span>© <?= date('Y') ?> <?= e(SCHOOL_NAME) ?>. All Rights Reserved.</span><span>Developed by <a href="https://mitrasoftwares.in/" target="_blank" rel="noopener">MITRA SOFTWARES</a></span></div>
</div></footer>
<a class="wa" href="https://wa.me/<?= e(SCHOOL_WHATSAPP) ?>?text=<?= rawurlencode(WHATSAPP_TEXT) ?>" target="_blank" rel="noopener" aria-label="Chat with us on WhatsApp"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M17.47 14.38c-.3-.15-1.76-.87-2.03-.97-.27-.1-.47-.15-.67.15-.2.3-.77.97-.94 1.16-.17.2-.35.22-.64.08-.3-.15-1.26-.47-2.39-1.48-.88-.79-1.48-1.76-1.65-2.06-.17-.3-.02-.46.13-.6.13-.14.3-.35.45-.52.15-.17.2-.3.3-.5.1-.2.05-.37-.03-.52-.07-.15-.67-1.61-.92-2.2-.24-.58-.49-.5-.67-.51h-.57c-.2 0-.52.07-.79.37-.27.3-1.04 1.02-1.04 2.48s1.07 2.88 1.21 3.07c.15.2 2.1 3.2 5.08 4.49.71.31 1.26.49 1.7.63.71.22 1.36.19 1.87.12.57-.09 1.76-.72 2-1.41.25-.7.25-1.29.18-1.41-.08-.13-.28-.2-.57-.35m-5.42 7.4h-.01a9.87 9.87 0 0 1-5.03-1.38l-.36-.21-3.74.98 1-3.65-.24-.37a9.86 9.86 0 0 1-1.51-5.26c0-5.45 4.44-9.88 9.89-9.88 2.64 0 5.12 1.03 6.99 2.9a9.83 9.83 0 0 1 2.89 6.99c0 5.45-4.44 9.88-9.88 9.88m8.41-18.3A11.82 11.82 0 0 0 12.05 0C5.5 0 .16 5.34.16 11.89c0 2.1.55 4.14 1.59 5.95L.06 24l6.3-1.65a11.88 11.88 0 0 0 5.68 1.45h.01c6.55 0 11.89-5.34 11.89-11.89a11.82 11.82 0 0 0-3.48-8.41z"/></svg><span>Chat with us</span></a>
<script src="assets/js/main.js"></script>
</body></html>
