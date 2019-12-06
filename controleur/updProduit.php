<?php

if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    $racine = "..";
}
require_once "$racine/doctrine/bootstrap.php";


// creation du menu burger
$menuBurger = array();

// recuperation des donnees GET, POST, et SESSION
$id = "";
if (isset($_GET["id"])) {
    $id = $_GET["id"];
}

$nom = "";
if (isset($_POST["nom"])) {
    $nom = $_POST["nom"];
}

$idRayon = "";
if (isset($_POST["idRayon"])) {
    $idRayon = $_POST["idRayon"];
}

// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 
if ($id != "") {
    $unProduit = $entityManager->getRepository('Produit')->find($id);
    $lesRayons = $entityManager->getRepository('Rayon')->findAll();
    
    if ($nom != "") {
    $unProduit->setNom($nom);
    }
    
    if ($idRayon != "") {
        // recuperation de l'objet Rayon dont l'id est passé en parametre
        $leRayon = $entityManager->getRepository('Rayon')->find($idRayon);

        // modif du rayon du produit
        $unProduit->setLeRayon($leRayon);
        
    }
    $entityManager->flush();
}



// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "modification produit";
include "$racine/vue/entete.html.php";
if ($id != "") {
    include "$racine/vue/vueUpdProduit.php";
}
include "$racine/vue/pied.html.php";
?>