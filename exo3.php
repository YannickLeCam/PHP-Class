<?php
require 'element/header.php';
require 'element/nav.php';
require_once 'Class/Personne.php';
?>

<h1>Exercice 3</h1>

<p>A partir de cet exercice demandez à votre formateur du jour le support sur la POO 
(programmation orientée objet) 
Créer une classe Personne (nom, prénom et date de naissance). 
Instancier 2 personnes et afficher leurs informations : nom, prénom et âge. 
$p1 = new Personne("DUPONT", "Michel", "1980-02-19") ; 
$p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17") ; 
Affichage : 
Michel DUPONT a … ans 
Alice DUCHEMIN a … ans </p>

<form action="" method="get">
    <div class="container">
        <div class="mb-3">
            <label for="" class="form-label">Entrer un nom de famille :</label>
            <input
                type="text"
                class="form-control"
                name="name"
                id=""
                aria-describedby="helpId"
                placeholder=""
            />
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Entrer un prénom :</label>
            <input
                type="text"
                class="form-control"
                name="firstname"
                id=""
                aria-describedby="helpId"
                placeholder=""
            />
        </div>
        <div class="mb-3">
            <label for="">Entrer la date de naissance</label>
            <input type="date" name="birthday" id="">
        </div>
        <button
            type="submit"
            class="btn btn-primary"
        >
            Envoyer
        </button>
    </div>
</form>


<?php
$p1 = new Personne("DUPONT","Michel","1980-02-19");
$p2 = new Personne("DUCHEMIN","Alice","1985-01-17");

echo $p1->presentation() . "<br>";
echo $p2->presentation() . "<br>";
if (isset($_GET['name']) & isset($_GET['firstname']) & isset($_GET['birthday'])) {
    $p3 = new Personne($_GET['name'],$_GET['firstname'],$_GET['birthday']);
    echo $p3->presentation() . "<br>";
}


?>


<?php
require 'element/footer.php'
?>