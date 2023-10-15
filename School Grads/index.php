<?php

spl_autoload_register(function($class){
    $formattedClass=str_replace("\\","/",$class);
    $path="{$formattedClass}.php";
    require_once $path;
});

use App\School;

$school=new School("LLC");

$school->add("john",1);
$school->add("louis",1);
$school->add("peter",2);
$school->add("meg",3);
$school->add("chris",4);
$school->add("brain",5);
$school->add("brain",6);

var_dump($school->grade(1));
echo "<br>";
var_dump($school->studentsByGradeAlphabetical());