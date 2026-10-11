<?php
// ===== EDIT YOUR SCHOOL DETAILS HERE =====
define('SCHOOL_NAME',    'Prakruthi Techno School');
define('SCHOOL_PHONE',   '84314 41361');
define('SCHOOL_PHONE_TEL','+918431441361');
define('SCHOOL_WHATSAPP','918431441361');  // WhatsApp number: country code + number, digits only
define('WHATSAPP_TEXT',  'Hello, I would like to know about admissions at Prakruthi Techno School.');
define('SCHOOL_ADDRESS', 'Gajanur, Shivamogga District, Karnataka – 577227');
define('SCHOOL_EMAIL',   'info@prakruthischool.example');
define('SCHOOL_HOURS',   'Mon – Sat, 9:00 AM – 4:30 PM');
// Social links (leave '' to hide the icon)
define('SOCIAL_FACEBOOK', '');
define('SOCIAL_INSTAGRAM','');
define('SOCIAL_YOUTUBE',  '');
// Home page "milestones" counters – shown only when filled with REAL figures, e.g.
// const SCHOOL_STATS=[[350,'+','Happy students'],[25,'+','Teachers & staff'],[10,'','Years of excellence'],[8,'','Classes, Nursery – Grade V']];
const SCHOOL_STATS=[];
define('NOTIFY_EMAIL',   '');              // optional: email to notify on new enquiry (needs working mail() on host)
define('ADMIN_PASSWORD', 'ChangeMe@123');  // CHANGE THIS before going live
define('ENQUIRY_FILE',   __DIR__.'/../data/enquiries.php');

function cut_text($s,$a,$n){return function_exists('mb_substr')?mb_substr($s,$a,$n):substr($s,$a,$n);}
function e($v){return htmlspecialchars((string)$v,ENT_QUOTES,'UTF-8');}
function save_enquiry(array $f): bool {
  $f['time']=date('Y-m-d H:i:s');
  $guard=file_exists(ENQUIRY_FILE)?'':"<?php http_response_code(403); exit; ?>\n";
  $ok=@file_put_contents(ENQUIRY_FILE,$guard.json_encode($f,JSON_UNESCAPED_UNICODE)."\n",FILE_APPEND|LOCK_EX)!==false;
  if($ok&&NOTIFY_EMAIL!=='')@mail(NOTIFY_EMAIL,'New enquiry - '.SCHOOL_NAME,print_r($f,true));
  return $ok;
}
