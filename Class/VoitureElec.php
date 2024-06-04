<?php

require_once 'Voiture.php';

class VoitureElec extends Voiture {
    private int $autonomie;

    public function __construct(string $marque,string $modele,int $nbPortes,int $autonomie) {
        parent::__construct($marque,$modele,$nbPortes); 
        $this->autonomie=$autonomie;
    }
    public function display():string
    {
        $msg =  <<<msg
La marque et le modèle du véhicule est : $this
Le nombre de porte est : $this->nbPortes
Son autonomie est de : $this->autonomie\n
msg;
        if ($this->isStart) {
            $msg .= "Le véhicule est démarré !\n";
        }else {
            $msg .= "Le véhicule est a l'arret !\n";
        }
        $msg.= "Sa vitesse actuelle est de : $this->vitesseActuel km/h\n";
        return $msg;
    }
}