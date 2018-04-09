<?php

require __DIR__ . '/../vendor/autoload.php';


$hello  = new App\Wcs\Hello();
echo $hello->talk() . "<br/>";


$helloWorld2 = new \HelloWorld\SayHello();
echo $helloWorld2->world();