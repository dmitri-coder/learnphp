<?php

$a = 1;
$a++;
$a--;
$a+=2;
$a-=2;
$a*=2;
$a/=2;
$a%=2;

$a = 'Snus' . ' o';
$a .=' clock';
$array = [0,9,52];

var_dump($array);
$array = [
    'essa' => 1,
    'tessa' => 2,
    'nig' => 3,
];
var_dump($array['nig']);

var_dump($array);

foreach($array as $key => $value){
    //echo $key . '=>' $value . "\n";
}
$name = 'Karin';

$string = "hello $name\n";
var_dump($string);
$char = 'a';

for($i=0;$i<100;$i++){
    var_dump($char);
    $char++;
}