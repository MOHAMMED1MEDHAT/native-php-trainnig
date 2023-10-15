<?php

declare(strict_types=1);

namespace App;

class DNA {
    public static function nucleotideCounts(string $dna) : array{
        $dnaArr=str_split($dna);  
        $results=["A"=>0,"T"=>0,"C"=>0,"G"=>0];

        for($i=0;$i<strlen($dna);$i++){
            foreach($results as $key=>$value){
                if($key===$dnaArr[$i]) $results[$key]++;
            }
        }
        return $results;
    }
}