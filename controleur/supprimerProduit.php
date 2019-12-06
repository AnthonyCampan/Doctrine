<?php
if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    $racine = "..";
}
require_once "$racine/doctrine/bootstrap.php";

// creation du menu burger
$menuBurger = array();

// recuperation des donnees GET, POST, et SESSION
$idProduit = "";
if (isset($_POST["idProduit"])) {
    $idProduit = $_POST["idProduit"];


// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 
    $unProduit = $entityManager->getRepository('Produit')->find($idProduit);
    $entityManager->remove($unProduit);
    $entityManager->flush();
}
$lesProduit = $entityManager->getRepository('Produit')->findAll();

// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "Creer un Produit";
include "$racine/vue/entete.html.php";
include "$racine/vue/vueSupprimerProduit.php";
include "$racine/vue/pied.html.php";