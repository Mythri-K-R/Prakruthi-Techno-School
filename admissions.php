<?php

$pageTitle='Admissions';$current='admissions';require __DIR__.'/includes/header.php';
banner('Admissions Open','Give your child a <em>joyful</em> start','Nursery to Grade V.','img-6.jpg');
?>
<section class="sec"><div class="w adm">
  <div class="rv">
    <span class="eyebrow">Admission Process</span>
    <h2>How to join Prakruthi.</h2>
    <p class="lead mt">Four simple steps from your first call to your child's first day.</p>
    <div class="join join-v mt-l">
      <ol class="steps">
        <li><h3>Enquire</h3><p>Call or send an enquiry.</p></li>
        <li><h3>Visit</h3><p>Tour the campus.</p></li>
        <li><h3>Apply</h3><p>Submit the form and documents.</p></li>
        <li><h3>Join</h3><p>Welcome to the family.</p></li>
      </ol>
      <div class="cut cut-boy"><img src="assets/images/kid-boy.webp" width="365" height="1000" alt="Happy Prakruthi student ready for school" loading="lazy"></div>
    </div>
  </div>
  <aside class="aside rv">
    <span class="eyebrow">Classes Open</span>
    <h3>Admissions for the new academic year</h3>
    <div class="chips lt"><span>Nursery</span><span>LKG</span><span>UKG</span><span>Grade I</span><span>Grade II</span><span>Grade III</span><span>Grade IV</span><span>Grade V</span></div>
    <div class="btns"><a class="btn btn-sun" href="tel:<?= e(SCHOOL_PHONE_TEL) ?>"><?= icon('phone') ?>Call <?= e(SCHOOL_PHONE) ?></a><a class="btn btn-line" href="contact.php#contact-form">Send an Enquiry<?= icon('arrow') ?></a></div>
    <p><?= icon('clock') ?><?= e(SCHOOL_HOURS) ?></p>
  </aside>
</div></section>
<?php faq_section(true); ?>
<?php require __DIR__.'/includes/footer.php'; ?>
