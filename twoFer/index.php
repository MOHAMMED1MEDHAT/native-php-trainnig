<?php
declare(strict_types=1);
function twoFer(string $name=null): ?string{
  return $name?"One for {$name}, one for me.":"One for you, one for me.";
}

var_dump(twoFer('Alice'));