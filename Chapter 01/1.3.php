<?php

define('PI', 3.1416); //constant name is captial letter which is convention

echo PI; //CONSTANT cannot be used in "{PI}" 

echo constant('PI'); // output: 3.1416

$constant = 'constant';
echo "valute of pi is : {$constant('PI')} "; //constant can be used in string using this method