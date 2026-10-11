<?php
$gallery=[0=>'c',1=>'c',2=>'s',3=>'a',4=>'a',5=>'k',6=>'c',7=>'s',8=>'a',9=>'c',10=>'k',11=>'k',12=>'c',13=>'s',14=>'c',15=>'a',16=>'c',17=>'s',18=>'c',19=>'a',20=>'k'];
$pageTitle='Gallery';$current='gallery';require __DIR__.'/includes/header.php';
banner('Gallery','Moments that <em>matter</em>','Life at Prakruthi Techno School.','img-7.jpg');
?>
<section class="sec sec-tight"><div class="w">
  <div class="filters" role="toolbar" aria-label="Filter photos"><button class="on" type="button" data-f="all" aria-pressed="true">All</button><button type="button" data-f="c" aria-pressed="false">Classroom</button><button type="button" data-f="a" aria-pressed="false">Activities</button><button type="button" data-f="s" aria-pressed="false">Sports</button><button type="button" data-f="k" aria-pressed="false">Campus</button></div>
  <div class="gal" id="gal"><?php foreach($gallery as $i=>$c): ?><button type="button" data-c="<?= $c ?>" aria-label="Open photo <?= $i+1 ?>"><img src="assets/images/img-<?= $i ?>.jpg" alt="Prakruthi students" loading="lazy"></button><?php endforeach; ?></div>
</div></section>
<div class="lb" id="lb" role="dialog" aria-modal="true" aria-label="Photo viewer"><img alt=""><button class="x" type="button" aria-label="Close"><?= icon('x') ?></button><button class="p" type="button" aria-label="Previous"><?= icon('chev-l') ?></button><button class="n" type="button" aria-label="Next"><?= icon('chev-r') ?></button><span class="lb-c"></span></div>
<?php require __DIR__.'/includes/footer.php'; ?>
