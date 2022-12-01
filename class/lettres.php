<?php

class Lettres{

    public string $word;

    public function __construct(string $word)
    {
        $this->remplacerLesLettres($word);
    }

    public function remplacerLesLettres(String $word)
    {
        $word = str_ireplace("e", 3, $word);
        $word = str_ireplace("i", 1, $word);
        $word = str_ireplace("o", 0, $word);
        $this->word = $word;

        return $this;
        
    }

    /**
     * Get the value of word
     */ 
    public function getWord(): string
    {
        return $this->word;
    }

    public function __toString(){
        return $this->word; 
    }
}