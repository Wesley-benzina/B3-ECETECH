<?php

Class Vehicule {
    private $nbPassager = 0;

    public function getNbPassager(){
        return $this->nbPassager;
    }
    
    public function setNbPassager($nbPassager){
        return $this->nbPassager = $nbPassager;
    }

    public function monter($nbPassager){
        return $this->nbPassager += $nbPassager;
    }

    public function descendre($nbPassager){
        return $this->nbPassager -= $nbPassager;
    }
}