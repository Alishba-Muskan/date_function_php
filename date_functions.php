<?php 

echo "<br>-----------------------------Date functions------------------------------<br><br>";




echo date_default_timezone_set('asia/karachi');


echo ' Date();      <br>';                            ////////////////////////////////////
echo date('dS F Y h:i A').'<br><br>';


echo ' time();<br>';                                 /////////////////////////////////////
echo time().'<br>';
echo date(' h:i:s A', time()).'<br><br>';


echo ' strtotime();<br>';                                   //////////////////////////////////
echo strtotime('next monday').'<br>';
echo date('dS F Y h:i A', strtotime('3 days ')).'<br><br>';




echo ' mktime();<br>';
echo mktime(2, 23, 56, 2, 23, 2025).'<br>';
echo date('dS F Y h:i A', mktime(2, 23, 56, 2, 23, 2025)).'<br><br>';


echo ' date_create() and date_format();<br>';
// echo date_create('23-02-2025').'<br>';
// isko hum direct echo nhi kar sakte ku ka ya aik object return karta h aur echo string return karta ha object nhi is lia is ka lia hum aik date_format ka function use karte ha jo object ko string ma convert karke return karta ha
$createdate = date_create('25-03-2025');
echo date_format( $createdate, 'dS F Y').'<br><br>';


echo 'datemodify();<br>';
// date_modify() se aap easily date ko change kar sakte ho bina naya object banaye.
$datemodify = date_create('25-03-2025');
date_modify($datemodify, '+1month');
echo date_format($datemodify, 'dS F Y').'<br><br>';















echo ' dateparse();<br>';
echo '<pre>';
print_r (date_parse("2025-05-23 14:30:00"));
echo '</pre>';
//detailed associative array return karta ha aur argument zaroori hota ha 


echo ' getdate();<br>';
echo '<pre>';
print_r (getdate());
echo '</pre>';

//ya associative array return karta ha aur argumemt zaroori nhi hota












echo ' checkdate();<br>';                          ///////////////////////////////////////////////
echo checkdate(12, 03, 2025).'<br><br>';


echo 'gmdate();<br>';                               ////////////////////////////////////////////
echo gmdate('dS F Y h:i:s').'<br><br>';


echo 'microtime();<br>';                /////////////////////////////////////////
echo microtime().'<br><br>';
//iska use tab kar sakte ha jab hame koi highly code performance check karni ho to us ma microseconds buhat imp ha











echo 'datediff();<br>';
$date1 = date_create('16-09-2004');
$date2 = date_create();
$diff = date_diff($date1, $date2);
echo $diff->y . 'saal ' . $diff->m   . 'mahine ' . $diff->d . 'din '.'<br><br>';




$d1 = date_create('23-05-2025');
$dinterval = new DateInterval('P2Y1M2D');
$d1->add($dinterval);
echo $d1->format('d-m-y').'<br><br>';



//-> ya aik object opeartor hota ha jo kisi object ka ander se kisi property ka element ko access karna ho


$d1 = date_create('23-05-2025');
$dinterval = new DateInterval('P2Y1M2D');
$d1->sub($dinterval);
echo $d1->format('d-m-y').'<br><br>';





?>