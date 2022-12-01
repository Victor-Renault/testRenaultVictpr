<?php

class Date{

    public function __toString(){
        $date = new DateTime();
$result = $date->format('d-m-Y');
return $result;
}
}