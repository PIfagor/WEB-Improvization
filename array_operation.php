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


?>