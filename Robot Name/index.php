<?php
declare(strict_types=1);

function getNewName(): string{
  
  $letters=range('A','Z');
  
  $number=mt_rand(100,999);
  
  shuffle($letters);
  
  return "{$letters[0]}{$letters[1]}{$number}";  
}

echo getNewName();