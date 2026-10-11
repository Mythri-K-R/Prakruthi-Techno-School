<?php
require_once __DIR__.'/includes/config.php';
session_start();
if(empty($_SESSION['t']))$_SESSION['t']=bin2hex(random_bytes(16));

$pageTitle='Home';$current='home';require __DIR__.'/includes/header.php';
$slides=[
  ['img-0.jpg','Admissions open · Nursery to Grade V','Small steps today. <span>Big dreams tomorrow.</span>','We nurture curious minds through joyful learning, hands-on experiences, technology and activities that help every child learn, explore and grow.',['admissions.php','Admissions Open'],['about.php','Explore School']],
  ['img-12.jpg','Technology in learning','Curiosity meets <span>technology.</span>','Robotics, smart classrooms and activity labs make technology a natural part of every lesson.',['facilities.php','See Facilities'],['academics.php','Our Academics']],
  ['img-7.jpg','Life at Prakruthi','Learning that is <span>joyful.</span>','Study, play, create and explore together. Every day at Prakruthi is a new adventure.',['activities.php','Explore Activities'],['gallery.php','View Gallery']],
];
?>
<section class="hero" id="hs" aria-roledescription="carousel" aria-label="Highlights">
  <div class="hero-media"><?php foreach($slides as $k=>$s): ?><img class="hero-bg<?= $k?'':' on' ?>" src="assets/images/<?= $s[0] ?>" alt=""<?= $k?' loading="lazy"':' fetchpriority="high"' ?>><?php endforeach; ?></div>
  <div class="w hero-in">
    <div class="hs-stack">
      <?php foreach($slides as $k=>$s): ?>
      <div class="hs-slide<?= $k?'':' on' ?>" role="group" aria-roledescription="slide" aria-label="<?= $k+1 ?> of <?= count($slides) ?>"<?= $k?' inert':'' ?>>
        <span class="pill"><span class="dot"></span><?= e($s[1]) ?></span>
        <<?= $k?'h2':'h1' ?> class="hs-h"><?= $s[2] ?></<?= $k?'h2':'h1' ?>>
        <p><?= e($s[3]) ?></p>
        <div class="btns"><a class="btn btn-sun" href="<?= $s[4][0] ?>"><?= e($s[4][1]) ?><?= icon('arrow') ?></a><a class="btn btn-line" href="<?= $s[5][0] ?>"><?= e($s[5][1]) ?></a></div>
      </div>
      <?php endforeach; ?>
    </div>
    <div class="hs-ctrl">
      <button class="hs-arr" type="button" data-d="-1" aria-label="Previous slide"><?= icon('chev-l') ?></button>
      <div class="hs-dots"><?php foreach($slides as $k=>$s): ?><button type="button"<?= $k?'':' class="on" aria-current="true"' ?> aria-label="Go to slide <?= $k+1 ?>"></button><?php endforeach; ?></div>
      <button class="hs-arr" type="button" data-d="1" aria-label="Next slide"><?= icon('chev-r') ?></button>
    </div>
    <nav class="hl" aria-label="Quick links">
      <a href="academics.php"><small>Programs</small><b>Nursery – Grade V</b><?= icon('arrow') ?></a>
      <a href="admissions.php"><small>Admissions</small><b>Now open</b><?= icon('arrow') ?></a>
      <a href="facilities.php"><small>Facilities</small><b>Smart classrooms</b><?= icon('arrow') ?></a>
      <a href="gallery.php"><small>Campus Life</small><b>Activities &amp; gallery</b><?= icon('arrow') ?></a>
    </nav>
  </div>
</section>

<section class="sec who"><div class="w split rv">
  <div>
    <span class="eyebrow">Who We Are</span>
    <h2>Who is Prakruthi Techno School?</h2>
    <p class="sub">Nurturing curious, confident learners for a digital-ready future.</p>
    <p class="lead mt">A warm, technology-enabled school in Gajanur where every child is encouraged to think, question and create. We combine caring teachers, activity-based methods and technology so that every child gains knowledge, life skills and confidence.</p>
    <div class="pgl">
      <div><i>01</i><b>Play</b><span>Joyful, hands-on exploration</span></div>
      <div><i>02</i><b>Learn</b><span>Concepts through activities</span></div>
      <div><i>03</i><b>Grow</b><span>Confidence and life skills</span></div>
    </div>
    <div class="btns"><a class="btn btn-sun" href="academics.php">View Our Curriculum<?= icon('arrow') ?></a><a class="btn btn-line" href="about.php">About Us</a></div>
  </div>
  <div class="cut cut-art">
    <img src="assets/images/kids-art.webp" width="1200" height="787" alt="Prakruthi students painting a tree together" loading="lazy">
    <span class="float-chip c1"><?= icon('palette') ?>Learning through play</span>
    <span class="float-chip c2"><?= icon('cap') ?>Nursery – Grade V</span>
  </div>
</div></section>

<?php stats_band(); ?>

<?php $why=[
  ['shapes','Activity-Based Learning','Meaningful learning through activities and real-world experiences.'],
  ['flask','Hands-on &amp; Experiential','Children explore concepts by doing, experimenting and discovering.'],
  ['sprout','Life Skills','Communication, collaboration, creativity and confidence.'],
  ['bulb','Independent Thinking','We encourage children to think, question and find solutions.'],
  ['smile','Joyful Learning','A positive environment that makes learning engaging.'],
  ['shield','Safe &amp; Healthy Campus','A supportive place to learn and grow confidently.'],
]; ?>
<section class="sec why"><div class="w">
  <div class="sh rv"><div><span class="eyebrow">Why Prakruthi</span><h2>Why choose Prakruthi Techno School?</h2></div><p class="lead">Every child is encouraged to think, question and create in a positive, supportive environment.</p></div>
  <div class="why-grid">
    <figure class="why-ph kid rv"><img src="assets/images/kid-girl.webp" width="612" height="900" alt="Confident Prakruthi student" loading="lazy"><figcaption><span class="why-tag"><?= icon('sprout') ?>Our approach</span><b>Learning that feels like play.</b><span>Nursery to Grade V · Gajanur, Shivamogga</span></figcaption></figure>
    <?php foreach($why as $i=>$w): ?>
    <article class="why-c rv" style="--i:<?= $i ?>"><span class="why-n" aria-hidden="true">0<?= $i+1 ?></span><span class="why-ic"><?= icon($w[0]) ?></span><div><h3><?= $w[1] ?></h3><p><?= $w[2] ?></p></div></article>
    <?php endforeach; ?>
  </div>
</div></section>

<section class="sec"><div class="w">
  <div class="sh rv"><div><span class="eyebrow">Our Programs</span><h2>A strong start, from the very first step.</h2></div><p class="lead">Two stages, one philosophy: understanding over memorising.</p></div>
  <div class="progs rv">
    <a class="prog" href="academics.php"><div class="im"><img src="assets/images/img-16.jpg" alt="Pre-primary students reading together" loading="lazy"></div><div><span class="tag">Nursery · LKG · UKG</span><h3>Pre-Primary</h3><p>Learn through play, exploration and activities.</p><span class="link">Learn more<?= icon('arrow') ?></span></div></a>
    <a class="prog" href="academics.php"><div class="im"><img src="assets/images/img-14.jpg" alt="Primary students in class" loading="lazy"></div><div><span class="tag">Grade I – Grade V</span><h3>Primary</h3><p>Strong foundations with activity-led, concept-clear learning.</p><span class="link">Learn more<?= icon('arrow') ?></span></div></a>
  </div>
</div></section>

<?php learning_areas(true); ?>

<section class="sec"><div class="w split rv">
  <div class="ph"><img src="assets/images/img-19.jpg" alt="Students building a robot" loading="lazy"><span class="badge"><?= icon('robot') ?>Robotics &amp; STEM</span></div>
  <div>
    <span class="eyebrow">Technology in Learning</span>
    <h2>Curiosity meets technology.</h2>
    <p class="lead mt">From building simple robots to digital learning aids, children learn how things work by creating them. Our smart classrooms and activity labs make technology a natural part of every lesson.</p>
    <ul class="checks"><li><?= icon('check') ?>Robotics</li><li><?= icon('check') ?>Digital Learning</li><li><?= icon('check') ?>Experiments</li></ul>
    <a class="btn btn-sun mt" href="facilities.php">See Facilities<?= icon('arrow') ?></a>
  </div>
</div></section>

<?php leaders_section(true); ?>

<section class="sec"><div class="w">
  <div class="sh sh-link rv"><div><span class="eyebrow">Admissions</span><h2>Joining Prakruthi is simple.</h2></div><a class="link" href="admissions.php">Admission details<?= icon('arrow') ?></a></div>
  <div class="join">
    <ol class="steps steps-h rv">
      <li><h3>Enquire</h3><p>Call or send an enquiry.</p></li>
      <li><h3>Visit</h3><p>Tour the campus.</p></li>
      <li><h3>Apply</h3><p>Submit the form and documents.</p></li>
      <li><h3>Join</h3><p>Welcome to the family.</p></li>
    </ol>
    <div class="cut cut-boy"><img src="assets/images/kid-boy.webp" width="365" height="1000" alt="Happy Prakruthi student ready for school" loading="lazy"></div>
  </div>
</div></section>

<section class="sec sec-alt"><div class="w">
  <div class="sh sh-link rv"><div><span class="eyebrow">Life at Prakruthi</span><h2>Moments that matter.</h2></div><a class="link" href="gallery.php">View full gallery<?= icon('arrow') ?></a></div>
  <div class="rail rv">
    <img src="assets/images/img-1.jpg" alt="Group study" loading="lazy"><img src="assets/images/img-7.jpg" alt="Outdoor games" loading="lazy"><img src="assets/images/img-8.jpg" alt="Classroom activity" loading="lazy"><img src="assets/images/img-12.jpg" alt="Exploring the globe" loading="lazy"><img src="assets/images/img-20.jpg" alt="Campus life" loading="lazy">
  </div>
</div></section>

<?php faq_section(); ?>

<section class="sec sec-alt" id="get-in-touch"><div class="w contact">
  <div class="rv">
    <span class="eyebrow">Get in Touch</span>
    <h2>Book a campus visit today!</h2>
    <p class="lead mt">We would love to meet you and your child. Send an enquiry and we will call you back, or reach us directly.</p>
    <div class="quick">
      <a href="tel:<?= e(SCHOOL_PHONE_TEL) ?>"><span class="ic"><?= icon('phone') ?></span><span><small>Call us</small><b><?= e(SCHOOL_PHONE) ?></b></span><?= icon('chev-r') ?></a>
      <a href="https://wa.me/<?= e(SCHOOL_WHATSAPP) ?>?text=<?= rawurlencode(WHATSAPP_TEXT) ?>" target="_blank" rel="noopener"><span class="ic ic-wa"><?= icon('chat') ?></span><span><small>WhatsApp</small><b>Chat with us</b></span><?= icon('chev-r') ?></a>
      <a href="https://www.google.com/maps/search/Prakruthi+Techno+School+Gajanur" target="_blank" rel="noopener"><span class="ic"><?= icon('nav') ?></span><span><small>Visit</small><b>Get directions</b></span><?= icon('chev-r') ?></a>
    </div>
  </div>
  <div class="card-f rv">
    <h3>Send an enquiry</h3><p>We will call you back soon.</p>
    <?php enquiry_form(); ?>
  </div>
</div></section>
<?php require __DIR__.'/includes/footer.php'; ?>
