<?php
require 'element/header.php';
require 'element/nav.php';
?>

<h1>Exercice 2</h1>

<p>Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres) à partir d’une 
chaîne de caractère représentant une date. 
Exemple : 
formaterDateFr("2018-02-23"); </p>

<form action="" method="get">
    <label for="birthday">Entrer une date de naissance :</label>
    <input type="date" name="birthday" id="">
    <button type="submit" class="btn btn-primary">Envoyer </button>
    
</form>

<?php    
    /**
     * formaterDateFr
     *
     * @param  mixed $date
     * @return string
     */
    function formaterDateFr(string $date):string {
        $fmt = new IntlDateFormatter("fr_FR", IntlDateFormatter::FULL, IntlDateFormatter::NONE, 'Europe/Paris', IntlDateFormatter::GREGORIAN);
        $date=new DateTime($date);
        return datefmt_format($fmt , $date);
    }
    if (isset($_GET['birthday'])) {
        echo "Vous est né le " . formaterDateFr($_GET['birthday']);
    }

?>




<?php
require 'element/footer.php'
?>