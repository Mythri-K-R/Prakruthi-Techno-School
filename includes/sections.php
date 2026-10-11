<?php
// Reusable page sections: enquiry form, FAQ accordion, milestone counters.

// Enquiry form. Always posts to contact.php, which validates and saves it.
// Needs session_start() and $_SESSION['t'] set before any output.
function enquiry_form($sent=false,$errors=[]){ ?>
<form class="form" method="post" action="contact.php#contact-form">
  <?php if($sent): ?><div class="al ok f">Thank you! Your enquiry has been received. We will call you soon.</div><?php endif; ?>
  <?php foreach($errors as $er): ?><div class="al er f"><?= e($er) ?></div><?php endforeach; ?>
  <input type="hidden" name="t" value="<?= e($_SESSION['t']) ?>"><input class="hp" name="website" tabindex="-1" autocomplete="off" aria-hidden="true">
  <div class="fld"><label for="f-parent">Parent name <span>*</span></label><input id="f-parent" name="parent" autocomplete="name" value="<?= e($_POST['parent'] ?? '') ?>" required></div>
  <div class="fld"><label for="f-phone">Phone number <span>*</span></label><input id="f-phone" name="phone" type="tel" inputmode="tel" autocomplete="tel" value="<?= e($_POST['phone'] ?? '') ?>" required></div>
  <div class="fld"><label for="f-child">Child name</label><input id="f-child" name="child" value="<?= e($_POST['child'] ?? '') ?>"></div>
  <div class="fld"><label for="f-grade">Grade</label><select id="f-grade" name="grade"><option value="">Select grade</option><?php foreach(['Nursery','LKG','UKG','Grade I','Grade II','Grade III','Grade IV','Grade V'] as $g): ?><option<?= ($_POST['grade'] ?? '')===$g?' selected':'' ?>><?= $g ?></option><?php endforeach; ?></select></div>
  <div class="fld f"><label for="f-msg">Message</label><textarea id="f-msg" name="message" rows="3"><?= e($_POST['message'] ?? '') ?></textarea></div>
  <button class="btn btn-sun f" type="submit">Send Enquiry<?= icon('arrow') ?></button>
</form>
<?php }

function faq_items(){
  return [
    ['Which classes does Prakruthi Techno School offer?','We offer pre-primary classes (Nursery, LKG and UKG) and primary classes from Grade I to Grade V.'],
    ['What is your teaching approach?','We follow activity-based, hands-on learning, including the Kreedo learning-through-play approach, so children understand concepts instead of memorising them.'],
    ['Do you use technology in the classroom?','Yes. Smart classrooms, digital learning aids, activity labs and robotics &amp; STEM activities make technology a natural part of every lesson.'],
    ['How do I apply for admission?','It takes four simple steps: enquire, visit the campus, submit the application form with documents, and join. Call us on '.e(SCHOOL_PHONE).' or <a href="contact.php#contact-form">send an enquiry</a>.'],
    ['Can we visit the campus before applying?','Yes, a campus visit is part of our admission process. Call us to choose a convenient time.'],
    ['What are the school timings?',e(SCHOOL_HOURS).'.'],
    ['Where is the school located?',e(SCHOOL_ADDRESS).'. <a href="https://www.google.com/maps/search/Prakruthi+Techno+School+Gajanur" target="_blank" rel="noopener">Get directions</a>.'],
  ];
}

function faq_section($alt=false){ ?>
<section class="sec<?= $alt?' sec-alt':'' ?>"><div class="w faq-wrap">
  <div class="rv">
    <span class="eyebrow">FAQs</span>
    <h2>Frequently asked questions.</h2>
    <p class="lead mt">Quick answers for parents. Can't find what you're looking for? Talk to us directly.</p>
    <div class="btns faq-act"><a class="btn btn-line" href="tel:<?= e(SCHOOL_PHONE_TEL) ?>"><?= icon('phone') ?>Call us</a><a class="btn btn-wa" href="https://wa.me/<?= e(SCHOOL_WHATSAPP) ?>?text=<?= rawurlencode(WHATSAPP_TEXT) ?>" target="_blank" rel="noopener"><?= icon('chat') ?>WhatsApp</a></div>
  </div>
  <div class="faq rv"><?php foreach(faq_items() as $k=>$q): ?>
    <details<?= $k===0?' open':'' ?>><summary><?= $q[0] ?><span class="pm" aria-hidden="true"></span></summary><p><?= $q[1] ?></p></details>
  <?php endforeach; ?></div>
</div></section>
<?php }

// Count-up milestones; hidden until SCHOOL_STATS has real figures (see config.php)
function stats_band(){
  if(!SCHOOL_STATS)return; ?>
<section class="stats-sec"><div class="w"><div class="stats rv"><?php foreach(SCHOOL_STATS as $s): ?>
  <div><b><span class="count" data-n="<?= (int)$s[0] ?>"><?= (int)$s[0] ?></span><?= e($s[1]) ?></b><span><?= e($s[2]) ?></span></div>
<?php endforeach; ?></div></div></section>
<?php }

/* ==========================================================
   LEADERSHIP MESSAGES – DUMMY CONTENT, replace before going live.
   Change the names, roles and messages below.
   Photos: add a portrait as assets/images/founder.jpg and
   assets/images/principal.jpg and it appears automatically
   (until then, initials are shown).
   ========================================================== */
function leaders(){
  return [
    'founder'=>[
      'label'=>"Founder's Message",
      'name'=>'Mr. Mahesh Gowda',          // DUMMY
      'role'=>'Founder & Chairman',
      'photo'=>'founder.jpg',
      'title'=>'Building a school where nature, curiosity and technology grow together.',
      'msg'=>[
        'When we started Prakruthi Techno School in Gajanur, our dream was simple: to give the children of our region the same quality of learning found in the best city schools, without taking them away from the calm and beauty of nature.',
        'We believe every child is born curious. Our role is to protect that curiosity and channel it through activity-based learning, caring teachers and the right use of technology, so that children do not just memorise. They understand, create and grow in confidence.',
        'Small steps today lead to big dreams tomorrow. I warmly invite you to visit our campus and become part of the Prakruthi family.',
      ],
    ],
    'principal'=>[
      'label'=>"Principal's Message",
      'name'=>'Mrs. Anitha Rao',           // DUMMY
      'role'=>'Principal',
      'photo'=>'principal.jpg',
      'title'=>'Every child learns differently, and every child can shine.',
      'msg'=>[
        'Dear Parents, at Prakruthi our classrooms are places where children ask questions, try ideas and learn from every attempt. From Nursery to Grade V, we build strong foundations in language, numbers and thinking skills through play, projects and hands-on activities.',
        'Our teachers know each child by name and by nature. We work closely with parents to celebrate progress, support challenges and make sure every child feels safe, happy and ready to learn.',
        'We look forward to welcoming your child and partnering with you on this joyful journey.',
      ],
    ],
  ];
}

function initials($name){
  $w=array_values(array_filter(explode(' ',preg_replace('/^(Mr|Mrs|Ms|Dr|Shri|Smt|Prof)\.?\s+/i','',trim($name)))));
  return strtoupper(cut_text($w[0]??'',0,1).cut_text($w[count($w)-1]??'',0,1));
}

// Round avatar: photo if present, otherwise initials
function avatar($l,$cls='av'){
  if(is_file(__DIR__.'/../assets/images/'.$l['photo']))return '<img class="'.$cls.'" src="assets/images/'.e($l['photo']).'" alt="'.e($l['name']).'" loading="lazy">';
  return '<span class="'.$cls.' av-mono" aria-hidden="true">'.e(initials($l['name'])).'</span>';
}

// Home page: two message cards linking to the full messages on About
function leaders_section($alt=true){ ?>
<section class="sec<?= $alt?' sec-alt':'' ?>"><div class="w">
  <div class="sh rv"><div><span class="eyebrow">Leadership</span><h2>Meet the people behind Prakruthi.</h2></div><p class="lead">The vision and care that shape every child's journey at our school.</p></div>
  <div class="lcards rv"><?php foreach(leaders() as $k=>$l): ?>
    <article class="lcard">
      <span class="lcard-k"><?= icon('quote') ?><?= e($l['label']) ?></span>
      <h3><?= e($l['title']) ?></h3>
      <p><?= e($l['msg'][0]) ?></p>
      <div class="lby"><?= avatar($l) ?><span><b><?= e($l['name']) ?></b><small><?= e($l['role']) ?></small></span><a class="link" href="about.php#<?= $k ?>">Read message<?= icon('arrow') ?></a></div>
    </article>
  <?php endforeach; ?></div>
</div></section>
<?php }

// About page: full message with portrait
function leader_message($k,$alt=false,$rev=false){
  $l=leaders()[$k];
  $hasPhoto=is_file(__DIR__.'/../assets/images/'.$l['photo']); ?>
<section class="sec<?= $alt?' sec-alt':'' ?>" id="<?= $k ?>"><div class="w msg<?= $rev?' rev':'' ?> rv">
  <figure class="portrait"><?php if($hasPhoto): ?><img src="assets/images/<?= e($l['photo']) ?>" alt="<?= e($l['name']) ?>" loading="lazy"><?php else: ?><span class="portrait-mono" aria-hidden="true"><?= e(initials($l['name'])) ?></span><?php endif; ?>
    <figcaption><b><?= e($l['name']) ?></b><span><?= e($l['role']) ?></span></figcaption></figure>
  <div>
    <span class="eyebrow"><?= e($l['label']) ?></span>
    <h2><?= e($l['title']) ?></h2>
    <div class="msg-by"><?= avatar($l) ?><span><b><?= e($l['name']) ?></b><small><?= e($l['role']) ?>, <?= e(SCHOOL_NAME) ?></small></span></div>
    <div class="msg-body"><?php foreach($l['msg'] as $para): ?><p><?= e($para) ?></p><?php endforeach; ?></div>
    <div class="sig"><span><?= e($l['name']) ?></span><small><?= e($l['role']) ?></small></div>
  </div>
</div></section>
<?php }

// Learning areas: moving subject ribbon + colour-coded flip-in cards (home + academics)
function learning_areas($alt=false){
  // [icon, title, text, icon colour, tint]
  $areas=[
    ['book','Languages','Reading, writing and speaking through stories and phonics.','#0b4a2b','#e6f2ea'],
    ['calc','Mathematics','Number sense and problem solving with hands-on materials.','#0e8a7e','#e1f4f1'],
    ['flask','Science &amp; EVS','Observing, experimenting and caring for our environment.','#d9620b','#fdefe3'],
    ['monitor','Computers','Digital literacy and safe, purposeful use of technology.','#a86b08','#fbf1dc'],
    ['robot','Robotics &amp; STEM','Building and tinkering to solve real problems.','#0e8a7e','#e1f4f1'],
    ['palette','Art &amp; Craft','Painting, craft and creative expression.','#d9620b','#fdefe3'],
    ['ball','Sports &amp; Games','Outdoor play, fitness and teamwork.','#0b4a2b','#e6f2ea'],
    ['globe','General Awareness','Curiosity about people, places and the world.','#a86b08','#fbf1dc'],
  ]; ?>
<section class="sec la<?= $alt?' sec-alt':'' ?>">
  <div class="w"><div class="sh rv"><div><span class="eyebrow">Learning Areas</span><h2>A complete, joyful curriculum.</h2></div><p class="lead">Balanced learning that builds knowledge, skills and confidence in every child.</p></div></div>
  <div class="la-ribbon" aria-hidden="true"><div class="la-track"><?php for($r=0;$r<2;$r++): foreach($areas as $k=>$x): ?><span class="<?= $k%2?'o':'' ?>"><?= $x[1] ?></span><i>✦</i><?php endforeach; endfor; ?></div></div>
  <div class="w"><div class="la-grid rv"><?php foreach($areas as $k=>$x): ?>
    <article class="la-c" style="--c:<?= $x[3] ?>;--t:<?= $x[4] ?>;--k:<?= $k ?>"><span class="la-n">0<?= $k+1 ?></span><span class="la-ic"><?= icon($x[0]) ?></span><h3><?= $x[1] ?></h3><p><?= $x[2] ?></p><span class="la-bar"></span></article>
  <?php endforeach; ?></div></div>
</section>
<?php }
