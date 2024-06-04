<?php
Class Personne{
    private string $name;
    private string $firstname;
    private DateTime $birthday;


    public function __construct(string $name , string $firstname ,string $birthday) {
        $this->name = $name;
        $this->firstname = $firstname;
        $this->birthday= new DateTime($birthday);
    }

    public function __toString()
    {
        return "$this->name $this->firstname";
    }
    public function getName():string{
        return $this->name;
    }
    public function getFirstname():string{
        return $this->firstname;
    }
    public function getBirthday():DateTime{
        return $this->birthday;
    }

    public function setName(string $name):void{
        $this->name = $name;
    }
    public function setFirstname (string $firstname):void{
        $this->firstname = $firstname;
    }
    public function setBirthday (string $birthday):void{
        $this->birthday = $birthday;
    }

    public function age():int {
        $date = $this->birthday;
        $age=$date->diff(new DateTime(),true);
        return $age->y;
    }

    public function presentation(){
        return "Bonjour je suis $this et j'ai " .$this->age(). " ans. ";
    }
} 




?>