<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}
require_once "$racine/doctrine/bootstrap.php";


// creation du menu burger
$menuBurger = array();

// recuperation des donnees GET, POST, et SESSION
$id="";
if (isset($_GET["id"])){
    $id = $_GET["id"];
}

// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 

if($id != ""){
        // recherche par id
        $unProduit = $entityManager->getRepository('Produit')->find($id);  
        $leRayon = $unProduit->getLeRayon();
}


// traitement si necessaire des donnees recuperees
;

// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "Detail";
include "$racine/vue/entete.html.php";
if ($id!="") {
    // affichage des resultats de la recherche
    include "$racine/vue/vueDetailProduit.php";
}
include "$racine/vue/pied.html.php";


?>