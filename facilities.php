<?php

$pageTitle='Facilities';$current='facilities';require __DIR__.'/includes/header.php';
banner('Facilities','A campus designed for <em>learning</em>','Safe, bright and equipped for discovery.','img-11.jpg');
?>
<section class="sec"><div class="w">
  <div class="sh rv"><div><span class="eyebrow">Infrastructure</span><h2>Everything a young learner needs.</h2></div><p class="lead">Spaces built for curiosity, creativity, reading, play and wellbeing.</p></div>
  <div class="tiles rv">
    <div class="tile"><span class="ic"><?= icon('monitor') ?></span><h3>Smart Classrooms</h3><p>Digital learning aids in every lesson.</p></div>
    <div class="tile"><span class="ic"><?= icon('flask') ?></span><h3>Activity Labs</h3><p>Well-equipped labs for experiments.</p></div>
    <div class="tile"><span class="ic"><?= icon('book') ?></span><h3>Library</h3><p>A reading-rich, quiet space.</p></div>
    <div class="tile"><span class="ic"><?= icon('ball') ?></span><h3>Play Area</h3><p>Safe outdoor play and sports.</p></div>
    <div class="tile"><span class="ic"><?= icon('palette') ?></span><h3>Creative Space</h3><p>Art, craft and imagination.</p></div>
    <div class="tile"><span class="ic"><?= icon('robot') ?></span><h3>Digital Learning</h3><p>Technology that supports teaching.</p></div>
    <div class="tile"><span class="ic"><?= icon('tree') ?></span><h3>Healthy Campus</h3><p>Green, clean and secure.</p></div>
    <div class="tile"><span class="ic"><?= icon('users') ?></span><h3>Caring Teachers</h3><p>Experienced, supportive educators.</p></div>
  </div>
</div></section>

<section class="sec sec-alt"><div class="w">
  <div class="sh sh-link rv"><div><span class="eyebrow">On Campus</span><h2>A look around.</h2></div><a class="link" href="gallery.php">View gallery<?= icon('arrow') ?></a></div>
  <div class="rail r3 rv"><img src="assets/images/img-9.jpg" alt="Library time" loading="lazy"><img src="assets/images/img-3.jpg" alt="Robotics activity" loading="lazy"><img src="assets/images/img-11.jpg" alt="Campus" loading="lazy"></div>
</div></section>
<?php require __DIR__.'/includes/footer.php'; ?>
