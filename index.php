<?php

use davidmgilo\SayHello;

//trobarà qualsevol classe del projecte
require 'vendor/autoload.php';

require 'src/SayHello.php';

//$sayhello = new \HelloWorld\SayHello();
//
//echo $sayhello->world();

echo \HelloWorld\SayHello::world();

echo SayHello::world();