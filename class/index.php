<?php

    include "test.php";
    include "lettres.php";
    include "date.php";

   
$test = new Test("France");
//var_dump($test);
echo $test;


$test3 = new Date();
//var_dump($test3);

echo($test3);


$test2 = new Lettres("insecto");
//var_dump($test2);
echo($test2);





