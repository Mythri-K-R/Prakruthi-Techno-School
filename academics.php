<?php

$pageTitle='Academics';$current='academics';require __DIR__.'/includes/header.php';
banner('Academics','Our academic <em>journey</em>','Nursery to Grade V, built on understanding rather than memorising.','img-14.jpg');
?>
<section class="sec"><div class="w">
  <div class="sh rv"><div><span class="eyebrow">Programs</span><h2>Two stages, one joyful journey.</h2></div><p class="lead">Each stage builds on the last, so children move forward with confidence.</p></div>
  <div class="progs rv">
    <div class="prog"><div class="im"><img src="assets/images/img-16.jpg" alt="Pre-primary students" loading="lazy"></div><div><span class="tag">Early Years</span><h3>Pre-Primary</h3><p>Learn through play, exploration and activities.</p><div class="chips lt"><span>Nursery</span><span>LKG</span><span>UKG</span></div></div></div>
    <div class="prog"><div class="im"><img src="assets/images/img-14.jpg" alt="Primary students" loading="lazy"></div><div><span class="tag">Grade I – Grade V</span><h3>Primary</h3><p>Strong foundations with activity-led, concept-clear learning.</p><div class="chips lt"><span>I</span><span>II</span><span>III</span><span>IV</span><span>V</span></div></div></div>
  </div>
</div></section>

<section class="sec sec-alt"><div class="w">
  <div class="sh rv"><div><span class="eyebrow">Learning Methodology</span><h2>Learning beyond the classroom.</h2></div><p class="lead">A simple four-step cycle that turns curiosity into real understanding.</p></div>
  <ol class="steps steps-h rv">
    <li><h3>Explore</h3><p>Observe, ask and discover.</p></li>
    <li><h3>Experiment</h3><p>Try ideas hands-on.</p></li>
    <li><h3>Understand</h3><p>Connect concepts to life.</p></li>
    <li><h3>Create</h3><p>Build and share ideas.</p></li>
  </ol>
</div></section>

<section class="sec"><div class="w split rev rv">
  <div class="ph"><img src="assets/images/img-4.jpg" alt="Children painting" loading="lazy"></div>
  <div>
    <span class="eyebrow">Kreedo · Learning Through Play</span>
    <h2>Every child learns differently.</h2>
    <p class="lead mt">Play-based and activity-based learning helps young learners build understanding through touch, movement and discovery.</p>
    <ul class="checks two"><li><?= icon('check') ?>Activity Based</li><li><?= icon('check') ?>Hands-on</li><li><?= icon('check') ?>Independent Thinking</li><li><?= icon('check') ?>Joyful Learning</li><li><?= icon('check') ?>Life Skills</li></ul>
  </div>
</div></section>
<?php learning_areas(true); ?>
<?php require __DIR__.'/includes/footer.php'; ?>
