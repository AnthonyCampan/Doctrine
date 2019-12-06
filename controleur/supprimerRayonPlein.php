<?php
if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    $racine = "..";
}
require_once "$racine/doctrine/bootstrap.php";

// creation du menu burger
$menuBurger = array();

// recuperation des donnees GET, POST, et SESSION
$idRayon = "";
if (isset($_POST["idRayon"])) {
    $idRayon = $_POST["idRayon"];


// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 
    $unRayon = $entityManager->getRepository('Rayon')->find($idRayon);
    foreach($unRayon->getLesProduits() as $unProduit){
       $entityManager->remove($unProduit); 
    }
    $entityManager->remove($unRayon);
    $entityManager->flush();
}
$lesRayons = $entityManager->getRepository('Rayon')->findAll();

// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "Supprimer un Rayon Plein";
include "$racine/vue/entete.html.php";
include "$racine/vue/vueSupprimerRayonPlein.php";
include "$racine/vue/pied.html.php";