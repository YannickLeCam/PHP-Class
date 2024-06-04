<?php
require 'element/header.php';
require 'element/nav.php';
require_once 'Class/Voiture.php';
require_once 'Class/VoitureElec.php';
?>

<h1>Exercice 5</h1>

<p>Créer une classe Voiture possédant 2 propriétés (marque et modèle) ainsi qu’une classe VoitureElec 
qui hérite (extends) de la classe Voiture et qui a une propriété supplémentaire (autonomie). 
Instancier une voiture « classique » et une voiture « électrique » ayant les caractéristiques 
suivantes : 
Peugeot 408 : $v1 = new Voiture("Peugeot","408"); 
BMW i3 150 : $ve1 = new VoitureElec("BMW","I3",100); 
Votre programme de test devra afficher les informations des 2 voitures de la façon suivante :  
echo $v1->getInfos()."<br/>"; 
echo $ve1->getInfos()."<br/>";</p>

<pre>
<?php
    $v1 = new VoitureElec("BMW","I3",5,100);
    $v2 = new Voiture("Peugeot","408",5);
    echo $v1->display()."<br>";
    echo $v2->display()."<br>";

?>
</pre>