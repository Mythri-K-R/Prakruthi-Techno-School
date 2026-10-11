<?php

$pageTitle='About Us';$current='about';require __DIR__.'/includes/header.php';
banner('About Us','A school that grows <em>with</em> your child','Rooted in nature, powered by technology.','img-10.jpg');
?>
<section class="sec"><div class="w split rv">
  <div class="ph"><img src="assets/images/img-10.jpg" alt="Prakruthi students together" loading="lazy"></div>
  <div>
    <span class="eyebrow">Our Story</span>
    <h2>Smart Learning for Tomorrow…</h2>
    <p class="lead mt">Prakruthi Techno School, Gajanur, is built on a simple belief: children learn best when they are curious, active and happy. We combine caring teachers, activity-based methods and technology so that every child gains knowledge, life skills and confidence.</p>
    <dl class="facts">
      <div><dt>Classes</dt><dd>Nursery – Grade V</dd></div>
      <div><dt>Approach</dt><dd>Activity-based</dd></div>
      <div><dt>Location</dt><dd>Gajanur, Shivamogga</dd></div>
      <div><dt>Campus</dt><dd>Safe &amp; green</dd></div>
    </dl>
  </div>
</div></section>

<?php leader_message('founder',true); leader_message('principal',false,true); ?>

<section class="sec sec-alt"><div class="w">
  <div class="sh rv"><div><span class="eyebrow">What Guides Us</span><h2>Our Mission, Vision &amp; Values</h2></div><p class="lead">The principles behind every lesson, activity and interaction at Prakruthi.</p></div>
  <div class="feat rv">
    <div><span class="ic"><?= icon('target') ?></span><h3>Mission</h3><p>To nurture curious, confident learners through joyful, hands-on education.</p></div>
    <div><span class="ic"><?= icon('eye') ?></span><h3>Vision</h3><p>Children who think independently and are ready for tomorrow's world.</p></div>
    <div><span class="ic"><?= icon('heart') ?></span><h3>Values</h3><p>Care, curiosity, respect, creativity and responsibility.</p></div>
  </div>
</div></section>
<?php require __DIR__.'/includes/footer.php'; ?>
