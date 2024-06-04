<?php
class Voiture {
    private string $marque;
    private string $modele;
    private int $nbPortes;
    private int $vitesseActuel=0;
    private bool $isStart=false;

    public function __construct(string $marque,string $modele,int $nbPortes) {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->nbPortes = $nbPortes;
    }

    public function getIsStart():bool{
        return $this->isStart;
    }
    public function getMarque():string{
        return $this->marque;
    }
    public function getModele():string{
        return $this->modele;
    }
    public function getNbPortes():int{
        return $this->nbPortes;
    }
    public function getVitesseActuel():int{
        return $this->vitesseActuel;
    }

    public function setIsStart(bool $isStart){
        $this->isStart = $isStart;
    }
    public function setMarque(string $marque){
        $this->marque = $marque;
    }
    public function setModele(string $modele){
        $this->modele = $modele;
    }
    public function setNbPortes(int $nbPortes){
        $this->nbPortes = $nbPortes;
    }
    public function setVitesseActuel(int $vitesseActuel){
        $this->vitesseActuel = $vitesseActuel;
    }

    public function __toString()
    {
        return "$this->marque $this->modele";
    }

    public function demarrer(){
        if ($this->isStart) {
            return "Le véhicule $this est déja démarré";
        }else {
            $this->isStart = true;
            return "Le véhicule $this vient de démarrer";
        }
    }

    public function stopper(){
        if ($this->isStart) {
            $this->vitesseActuel=0;
            $this->isStart=false;
            return "Le véhicule $this est actuellement à l'arrêt";
        }else {
            return "Le véhicule $this est deja à l'arrêt ! ";
        }
    }

    public function accelerer(int $vitesse){
        if ($this->isStart) {
            if ($vitesse>$this->vitesseActuel) {
                $this->vitesseActuel=$vitesse;
                return "Le véhicule $this a acceléré a $vitesse km/h";
            }else {
                return "Le véhicule $this est deja à $this->vitesseActuel km/h, il ne peut pas accelérer à $vitesse km/h";
            }
        }else {
            return "Le vehicule $this n'a pas encore démarré";
        }
    }

    public function ralentir(int $vitesse){
        if ($this->isStart) {
            if ($vitesse < $this->vitesseActuel) {
                $this->vitesseActuel=$vitesse;
                return "Le véhicule $this a ralentie a $vitesse km/h";
            }else {
                return "Le véhicule $this est deja à $this->vitesseActuel km/h, il ne peut pas ralentir à $vitesse km/h";

            }
        }else {
            return "Le vehicule $this n'a pas encore démarré";
        }
    }

    public function display(){
        $msg =  <<<msg
        La marque et le modèle du véhicule est : $this\n
        Le nombre de porte est : $this->nbPortes\n  
msg;
        if ($this->isStart) {
            $msg .= "Le véhicule est démarré !\n";
        }else {
            $msg .= "Le véhicule est a l'arret !\n";
        }
        $msg.= "Sa vitesse actuelle est de : $this->vitesseActuel\n";
        return $msg;

    }

}



?>