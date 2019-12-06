<?php

if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    $racine = "..";
}
require_once "$racine/doctrine/bootstrap.php";


// creation du menu burger
$menuBurger = array();

// recuperation des donnees GET, POST, et SESSION
$libelle = "";
if (isset($_POST["libelle"])) {
    $libelle = $_POST["libelle"];


// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 
    $rayon = new Rayon();
    $rayon->setLibelle($libelle);

    $entityManager->persist($rayon);
    $entityManager->flush();
}
$lesRayons = $entityManager->getRepository('Rayon')->findAll();


// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "Gestion des rayons";
include "$racine/vue/entete.html.php";
include "$racine/vue/vueGestRayon.php";

include "$racine/vue/pied.html.php";
?>