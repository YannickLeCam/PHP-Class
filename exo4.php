<?php
require 'element/header.php';
require 'element/nav.php';
require_once 'Class/Voiture.php';
?>
<h1>Exercice 4</h1>

<p>Créer une classe Voiture possédant les propriétés suivantes : marque, modèle, nbPortes et 
vitesseActuelle ainsi que les méthodes demarrer( ), accelerer( ) et stopper( ) en plus 
des accesseurs (get) et mutateurs (set) traditionnels. La vitesse initiale de chaque véhicule 
instancié est de 0. Une méthode personnalisée displayInfos() pourra afficher toutes les informations 
d’un véhicule. 
v1 ➔ "Peugeot","408",5 
v2 ➔ "Citroën","C4",3 
Coder l’ensemble des méthodes, accesseurs et mutateurs de la classe tout en réalisant des jeux de 
tests pour vérifier la cohérence de la classe Voiture. Vous devez afficher les tests et les éléments</p>
<pre>
<?php
$v1 = new Voiture("Peugeot","408",5);
$v2 = new Voiture("Citroën","C4",3);
var_dump($v1,$v2);
echo $v1->demarrer() . "<br>";
echo $v1->accelerer(50). "<br>";
echo $v2->accelerer(50). "<br>";
echo $v1->display() . "<br>";
echo $v2->display() . "<br>";

?>
</pre>
<?php
require 'element/footer.php'
?>