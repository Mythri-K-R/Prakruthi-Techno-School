<?php
require_once __DIR__.'/../includes/config.php';
session_start();
if(isset($_GET['logout'])){session_destroy();header('Location: enquiries.php');exit;}
$err='';
if($_SERVER['REQUEST_METHOD']==='POST'){
  if(hash_equals(ADMIN_PASSWORD,(string)($_POST['pw']??''))){session_regenerate_id(true);$_SESSION['admin']=1;header('Location: enquiries.php');exit;}
  $err='Wrong password.';
}
$rows=[];
if(!empty($_SESSION['admin'])&&is_file(ENQUIRY_FILE)){
  foreach(file(ENQUIRY_FILE,FILE_IGNORE_NEW_LINES|FILE_SKIP_EMPTY_LINES) as $l){if($l!==''&&$l[0]==='{'){$r=json_decode($l,true);if($r)$rows[]=$r;}}
  $rows=array_reverse($rows);
}
?><!DOCTYPE html><html lang="en"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><meta name="robots" content="noindex"><title>Enquiries – Admin</title><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Inter+Tight:wght@600;700&display=swap"><link rel="stylesheet" href="../assets/css/style.css"></head><body>
<div class="admin"><h2>Enquiries</h2>
<?php if(empty($_SESSION['admin'])): ?>
<form method="post"><?php if($err): ?><div class="al er"><?= e($err) ?></div><?php endif; ?><input type="password" name="pw" placeholder="Admin password" aria-label="Admin password" required><button class="btn btn-sun">Login</button></form>
<?php else: ?><div class="admin-bar"><span>Total: <b><?= count($rows) ?></b></span><a href="../index.php">View website</a><a href="?logout=1">Logout</a></div>
<div class="tw"><table class="t"><tr><th>Date</th><th>Parent</th><th>Phone</th><th>Child</th><th>Grade</th><th>Message</th></tr>
<?php foreach($rows as $r): ?><tr><td><?= e($r['time']??'') ?></td><td><?= e($r['parent']??'') ?></td><td><a href="tel:<?= e($r['phone']??'') ?>"><?= e($r['phone']??'') ?></a></td><td><?= e($r['child']??'') ?></td><td><?= e($r['grade']??'') ?></td><td><?= nl2br(e($r['message']??'')) ?></td></tr><?php endforeach; ?>
<?php if(!$rows): ?><tr><td colspan="6">No enquiries yet.</td></tr><?php endif; ?></table></div><?php endif; ?></div></body></html>
