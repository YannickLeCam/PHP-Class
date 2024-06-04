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

if (isset($_GET['birthday'])) {
    $date = new DateTime($_GET['birthday']);
    $age=$date->diff(new DateTime(),true);
    echo "Vous avez exactement : ". $age->y. " année ". $age->m ." mois et ". $age->d-1  ." jours";
}


?>
<?php
require 'element/footer.php'
?>



