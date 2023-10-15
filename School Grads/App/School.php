<?php
declare(strict_types=1);

namespace App;

class School{

    private string $schoolName;
    private array $enrollements;

    public function __construnt(string $newSchoolName){
        $this->schoolName=$newSchoolName;
        $this->enrollements=[];
    }

    public function add(string $name, int $grade): void{
        $this->enrollements[$grade][]=$name;
    }

    public function grade($grade) : array{
        return $this->enrollements[$grade] ?? [];
    }

    public function studentsByGradeAlphabetical(): array{
        foreach($this->enrollements as $key=>$value){
            sort($this->enrollements[$key]);
        }

        sort($this->enrollements);

        return $this->enrollements ?? [];
    }

}