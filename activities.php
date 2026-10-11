<?php

$pageTitle='Activities';$current='activities';require __DIR__.'/includes/header.php';
banner('Activities','Learning that is <em>joyful</em>','Study, play, create and explore together.','img-2.jpg');
$acts=[
  ['img-1.jpg','Group Study','Reading and learning together builds teamwork.'],
  ['img-2.jpg','Sports &amp; Games','Football and outdoor play for fitness and spirit.'],
  ['img-3.jpg','Robotics &amp; STEM','Building and tinkering to understand technology.'],
  ['img-15.jpg','Art &amp; Craft','Painting and creativity that express ideas.'],
  ['img-12.jpg','Explore the World','Globes, books and curiosity about our planet.'],
  ['img-9.jpg','Library Time','Reading habits that last a lifetime.'],
];
?>
<section class="sec"><div class="w">
  <div class="sh rv"><div><span class="eyebrow">Beyond Textbooks</span><h2>Every day is a new adventure.</h2></div><p class="lead">Activities that build teamwork, fitness, creativity and curiosity.</p></div>
  <div class="acts rv"><?php foreach($acts as $a): ?>
    <div class="acard"><div class="im"><img src="assets/images/<?= $a[0] ?>" alt="" loading="lazy"></div><div><h3><?= $a[1] ?></h3><p><?= $a[2] ?></p></div></div>
  <?php endforeach; ?></div>
</div></section>
<?php require __DIR__.'/includes/footer.php'; ?>
