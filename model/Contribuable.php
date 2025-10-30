<?php

class Contribuable{
    //attribue au secours
    private string $nom;
    private float $revenu;

    private  const TRANCHE1= 0.09;
    private const TRANCHE2 = 0.14;

    //propriété

    public function getNom(){
        return $this->nom;
    }

    public function SetRevenu(float $_revenu){
        $this->revenu = $_revenu;
    }

    public function getRevenu(){
        return $this->revenu;
    }
/// constructeur sniff
    public function __construct(string $_nom, float $_revenu)
    {
        $this->nom = $_nom;
        $this->revenu = $_revenu;
    }

    /**
     * Méthode (service rendu par la class)
     */

    public function calculImpot():float{
        $impot = 0;
        if ($this->revenu < 15000) {
            $impot = $this->revenu * self::TRANCHE1;
        }
        else{
            $impot = 15000 * self::TRANCHE1 + ($this->revenu - 15000) * self::TRANCHE2;
        }
        return $impot;
    }

}









?>