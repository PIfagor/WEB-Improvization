<?php
$massiv4ik= array('Glen','Meggy','Rick');
print_r($massiv4ik);
echo '<br>';

#push & pop
array_push($massiv4ik, 'Sofia');
array_push($massiv4ik, 'Elly');
print_r($massiv4ik);
echo '<br>';

$el = array_pop($massiv4ik);
print_r($massiv4ik);
echo '<br>';
print_r($el);
echo '<br>';

array_unshift($massiv4ik, $el);
print_r($massiv4ik);
echo '<br>';

array_shift($massiv4ik);
print_r($massiv4ik);
echo '<br>';

#compact and extract 
$host = 'localhost';
$user = 'admin';
$password = 'parol';

$DB = compact('host','user','password');
print_r($DB);
echo '<br>';

$input = array(1,2,3,4,5);
print_r($input);
echo '<br>';

#part of arrays
$output = array_slice($input, 0,3);
print_r($output);
echo '<br>';

$output = array_slice($input, 2);
print_r($output);
echo '<br>';

$output = array_slice($input, -2,2);
print_r($output);
echo '<br>';

#fill array
$massiv4ik = array_fill(0, 10, rand(0,10));
print_r($massiv4ik);
echo '<br>';

$keys = array('a','b','c');
$massiv4ik = array_fill_keys($keys,777);
print_r($massiv4ik);
echo '<br>';

#differents
$a1 = array('a' => 'green', 'red', 'blue','bronw');
$a2 = array('b' => 'green','yellov','red' ); 
print_r($a1);
echo '<br>';
print_r($a2);
echo '<br>';
$diff = array_diff($a1, $a2);
print_r($diff);
echo '<br>';
#wtf?
$diff = array_diff_assoc($a1, $a2);
print_r($diff);
echo '<br>';


#sum&prod
$a =range(1, 100);
echo array_sum($a);
echo '<br>';
echo array_product($a);
echo '<br>';

$rkeys = array_rand($a,2);
echo $rkeys[0].'<br>';
echo $rkeys[1].'<br>';

$a = array(1,2,4,5,6,1,1,1,1);
print_r ($a);
echo '<br>';
$u_a = array_unique($a);
print_r ($u_a);
echo '<br>';

#keys and values
$massiv4ik = array('name'=>'guest','password'=>'empty');
print_r(array_values($massiv4ik));
echo '<br>';
print_r(array_keys($massiv4ik));
echo '<br>Change k2v<br>';
$ar = array_flip($massiv4ik);
print_r(array_values($ar));
echo '<br>';
print_r(array_keys($ar));
echo '<br><br>';

#array walking
function my_print($item, $key)
{
	echo $item.' = '.$key.' HODOR<br>';
}
$massiv4ik=  array('audi','bmw','mersedes','ladaPriora');
array_walk($massiv4ik, 'my_print');

function asqr ($n){
	return ($n*$n);
}
$massiv4ik = array(0,1,2,3,-4);
print_r($massiv4ik);
echo '<br>';
$res = array_map('asqr', $massiv4ik);
print_r($res);
echo '<br>';


?>