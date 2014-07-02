<?php

$A  = array(5,234,24,1,4,5,6,7 );
sort($A);
print_r($A);
echo '<br>';

$fruits = array('b' => 'banana', 'a'=>'orange', 'c' => 'apple');
asort($fruits);
print_r($fruits);
echo '<br>';

ksort($fruits);
print_r($fruits);
echo '<br>';

shuffle($fruits);
print_r($fruits);
echo '<br>';

$files  = array('m1.txt', 'm2.txt', 'm15.txt', 'm22.txt', 'M17.txt');
asort($files);
print_r($files);
echo '<br>';

natsort($files);
print_r($files);
echo '<br>';

natcasesort($files);
print_r($files);
echo '<br>';
?>