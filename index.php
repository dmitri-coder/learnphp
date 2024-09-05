<?php

class Kast {
    public $height;
    public $width;
    public $length;

    public function volume(){
        return $this->height * $this->width * $this->length;
    }
}

$box = new Kast();
$box->height = 1;
$box->width = 2;
$box->length = 3;
var_dump($box);
$box2 = new Kast();
$box2->height = 4;
$box2->width = 5;
$box2->length = 6;
var_dump($box);
var_dump($box2);

var_dump($box->volume());
var_dump($box2->volume());