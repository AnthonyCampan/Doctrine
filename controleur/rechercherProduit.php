<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}
require_once "$racine/doctrine/bootstrap.php";


// creation du menu burger
$menuBurger = array();

// recuperation des donnees GET, POST, et SESSION
$nom="";
if (isset($_POST["nom"])){
    $nom = $_POST["nom"];
}

// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 

if($nom != ""){
        // recherche par nom
        $lesProduits = $entityManager->getRepository('Produit')->getProduitsByNom($nom);   
}


// traitement si necessaire des donnees recuperees
;

// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "Recherche d'un produit";
include "$racine/vue/entete.html.php";
include "$racine/vue/vueRechercheProduit.php";
if ($nom != "") {
    // affichage des resultats de la recherche
    include "$racine/vue/vueResultRecherche.php";
}
include "$racine/vue/pied.html.php";


?>