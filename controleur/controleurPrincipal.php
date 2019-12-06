<?php

function controleurPrincipal($action){
    $lesActions = array();
    $lesActions["defaut"] = "accueil.php";
    $lesActions["recherche"] = "rechercherProduit.php";
    $lesActions["detailProduit"] = "detailProduit.php";
    $lesActions["updProduit"] = "updProduit.php";
    $lesActions["gestRayon"] = "gestRayon.php";
    $lesActions["creerProduit"] = "creerProduit.php";
    $lesActions["supprProduit"] = "supprimerProduit.php";
    $lesActions["supprRayonVide"] = "supprimerRayonVide.php";
    $lesActions["supprRayonPlein"] = "supprimerRayonPlein.php";
    
    if (array_key_exists ( $action , $lesActions )){
        return $lesActions[$action];
    }
    else{
        return $lesActions["defaut"];
    }

}

?>