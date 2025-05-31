<?php

echo "<br>-----------------------------Date functions------------------------------<br><br>";

date_default_timezone_set('asia/karachi');

echo date('dS F Y h:i A').'<br>';
echo time().'<br>';
echo date('h:i:s A', time()).'<br>';
echo strtotime('next monday').'<br>';
echo date('dS F Y', strtotime('3 days')).'<br>';
echo checkdate(9, 02, 2025).'<br>';
echo microtime().'<br>';
echo gmdate('dS F Y h:i A').'<br>';
// ya hame greenwich mean time/UTC 







echo mktime(2, 23, 45, 02, 24, 2026).'<br>';
echo date('dS F Y h:i A',mktime(2, 23, 45, 02, 24, 2026)).'<br>';
$datecreate = date_create();
echo date_format($datecreate, 'dS F Y').'<br>';
date_modify($datecreate, '+4month');
echo date_format($datecreate, 'dS F Y').'<br>';










echo '<pre>';
print_r (getdate()).'<br>';
echo '</pre>';

echo '<pre>';
print_r (date_parse('25-09-2025 2:45:02')).'<br>';
echo '</pre>';










$DOB = date_create('16-09-2004');
$currdate = date_create();
$diff = date_diff($DOB, $currdate);
echo $diff->y . ' saal ' . $diff->m . ' mahine ' . $diff->d . ' din ho gaye ha <br>' ;











$d1 = date_create('24-05-2025');
$interval = new DateInterval('P1M');
$d1->add($interval);
echo $d1->format('dS F Y').'<br       >'; 


$d1 = date_create('24-05-2025');
$interval = new DateInterval('P1M');
$d1->sub($interval);
echo $d1->format('dS F Y'); 



?>