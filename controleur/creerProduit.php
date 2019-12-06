<?php
if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    $racine = "..";
}
require_once "$racine/doctrine/bootstrap.php";

// creation du menu burger
$menuBurger = array();

// recuperation des donnees GET, POST, et SESSION
$nomP = "";
if (isset($_POST["nomP"])) {
    $nomP = $_POST["nomP"];


// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 
    $produit = new Produit();
    $produit->setNom($nomP);

    $entityManager->persist($produit);
    $entityManager->flush();
}

// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "Creer un Produit";
include "$racine/vue/entete.html.php";
include "$racine/vue/vueCreerProduit.php";
include "$racine/vue/pied.html.php";