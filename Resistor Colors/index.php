<?php

declare(strict_types=1);

// 1. Create function for accepting the color as a string.
// 2. Create an array resistor colors with their relative numeric code
// 3. Return a numeric code based on the color's name
function colorCode(string $color):?int{
  $resistorMap=['black'=>0,'brown'=>1,
'red'=>2,
'orange'=> 3,
'yellow'=> 4,
'green'=> 5,
'blue'=>6,
'violet'=> 7,
'grey'=>8,
'white'=> 9,
];

    foreach($resistorMap as $key=>$value){
      if(strtolower($color)===$key){
        return $value;
      }
    }

  return null;
    
}

var_dump(colorCode('black'));