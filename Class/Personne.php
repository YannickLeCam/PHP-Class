<?php
Class Personne{
    private string $name;
    private string $firstname;
    private string $birthday;


    public function __construct(string $name , string $firstname ,string $birthday) {
        $this->name = $name;
        $this->firstname = $firstname;
        $this->birthday= $birthday;
    }

    public function getName():string{
        return $this->name;
    }
    public function getFirstname():string{
        return $this->firstname;
    }
    public function getBirthday():string{
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

    public function age():string {
        $mois_jour = [
            "01"=>31,
            "02"=>28,
            "03"=>31,
            "04"=>30,
            "05"=>31,
            "06"=>30,
            "07"=>31,
            "08"=>31,
            "09"=>30,
            "10"=>31,
            "11"=>30,
            "12"=>31
        ];
        $date = new DateTimeImmutable($this->birthday);
        $now = new DateTimeImmutable();
        $day = $now->format('d') - $date->format('d');
        $month = $now->format('m') - $date->format('m');
        $year = $now->format('Y') - $date->format('Y');
        if ($day<0) {
            $day = $mois_jour[$now->format('m')]+($day);
            $month-=1;
        }
        if ($month<0) {
            $month+=12;
            $year-=1;
        }
        return $year;
    }

    public function presentation(){
        return "Bonjour je suis $this->name $this->firstname et j'ai " .$this->age(). " ans. ";
    }
} 




?>