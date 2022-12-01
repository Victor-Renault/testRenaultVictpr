<?php
class Test
{
    public string $country;

    public function __construct(string $country)
    {
        $this->capital($country);
    }


    public function capital(String $country)
    {
        $this->country = $country;

        switch ($country) {
            case $country == 'France':
                $this->country = 'Paris';
                return $this;
                break;
            case $country == 'Allemagne':
                $this->country ="Berlin";
                return $this;
                break;
            case $country == 'Italie':
                $this->country = "Rome";
                return $this;
                break;
            case $country == 'Maroc':
                $this->country = "Rabat";
                return $this;
                break;
            case $country == 'Espagne':
                $this->country = "Madrid";
                return $this;
                break;
            case $country == 'Portugal':
                $this->country = "Lisbonne";
                return $this;
                break;
            case $country == 'Angleterre ':
                $this->country = "Londres";
                return $this;
                break;
            default: 
            $this->country = "Inconnu";
            return $this;
                break;
        }
    }

    /**
     * Get the value of country
     */ 
    public function getCountry(): string
    {
        return $this->country;
    }

    /**
     * Set the value of country
     *
     * @return  self
     */ 


    public function __toString(): string{
        return $this->country;

    }
}

?>