<?php
/*
    php data type

    integer Int
    double / float
    Boolean
    Null
    String
    Array
    Object
    Resource
*/
$name = "Earth";
var_dump($name); //output: string(5) "Earth"
echo "\n";

echo 'we\'re strong'; // output: we're strong (escaping \')
echo "\n";

echo "we're living on {$name}"; //output: we're living on Earth 
echo "\n";

echo strtoupper($name); //output: EARTH
echo "\n";

printf("we're living on %s", $name); //output we're living on Earth
echo "\n";

$amount = 71;
printf("About %d percent of the %s's surface is water-covered", $amount, $name);
//output: About 71 percent of the Earth's surface is water-covered
echo "\n";

echo "my name is
Nahidul islam\n
How are you?";
/*
output:
my name is
Nahidul islam

How are you?
*/