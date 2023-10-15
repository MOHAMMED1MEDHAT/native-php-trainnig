<?php

<?php

spl_autoload_register(function($class){
  $formattedClass=str_replace("\\","/",$class);
  $path="{$formattedClass}.php";
  require_once $path;
});

use App\DNA;

$dna="GATTACA";

var_dump(DNA::nucleotideCounts($dna));
