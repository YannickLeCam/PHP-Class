<?php
require 'element/header.php';
require 'element/nav.php';
?>

<h1>Exercice 1</h1>

<p>Calculer l'âge exact d'une personne à partir de sa date de naissance (en années, mois, jours). 
Affichage : si la date courante est le 21/05/2018 et la date de naissance le 
17/01/1985 : 
Age de la personne : 33 ans 4 mois 4 jours  </p>

<form action="" method="get">
    <label for="birthday">Entrer une date de naissance :</label>
    <input type="date" name="birthday" id="">
    <button type="submit" class="btn btn-primary">Envoyer </button>
    
</form>


<?php

/**
 * datetoarray a partir d'une date de formulaire on obtient un tableau avec les differents composant qui l'a compose
 *
 * @param  mixed $date
 * @return array tel que [yyyy,mm,dd]
 */
function datetoarray(string $date):array{
    return explode('-',$date);
}

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

if (isset($_GET['birthday'])) {
    $tabDate = datetoarray($_GET['birthday']);
    $date = new DateTimeImmutable($_GET['birthday']);
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
    echo "Vous avez exactement : $year année $month mois et $day jours";
}


?>
<?php
require 'element/footer.php'
?>



