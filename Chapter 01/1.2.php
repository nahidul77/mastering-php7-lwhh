<?php
// https://www.php-fig.org/
// <? avoid php shortcode instead use full code <?php 

$my_name = "Nahidul Islam"; //wordpress

$myName = "Nahid"; //camelcase recommended

$age = 26;

$word = "age";

echo $$word; //output : 26

echo 'Hello '.$myName; // output: Hello Nahid

echo "\n"; // special character or variable must be in the double quatation not working in single quatation.

echo "Hello {$myName}"; // output: Hello Nahid