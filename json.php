<?php 

$json = '["username","age","address"]';
var_dump($json);

echo '<br>';

$phpArray =json_decode($json);
var_dump($phpArray);

echo '<hr>';

$json = ["username","age","address"];
var_dump($json);

echo '<br>';

$phpArray = json_encode($json);
var_dump($phpArray);

echo '<br>';
