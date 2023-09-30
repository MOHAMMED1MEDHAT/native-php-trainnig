<?php
declare(strict_types=1);
function isArmstrongNumber(int $number): bool{
  $numArr=str_split((string)$number);
  
  $results=array_map(fn($num)=>$num**count($numArr),$numArr);
  
  return array_sum($results)===$number;
  
}

var_dump(isArmStrongNumber(154));