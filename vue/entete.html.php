<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <title><?php echo $titre ?></title>
        <style type="text/css">
            @import url("css/base.css");
            @import url("css/form.css");
            @import url("css/cgu.css");
            @import url("css/corps.css");
        </style>
        <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    </head>
    <body>
    <nav>
            
            <ul id="menuGeneral">
                <li><a href="./?action=accueil">Accueil</a></li> 
                <li><a href="./?action=recherche"><img src="images/rechercher.png" alt="loupe" />Recherche</a></li>
                <li><a href="./?action=gestRayon">Les rayons</a></li> 
                <li><a href="./?action=creerProduit">Ajouter produit</a></li>
                <li><a href="./?action=supprProduit">Supprimer produit</a></li>
                <li><a href="./?action=supprRayonVide">Supprimer rayon vide</a></li>
                <li><a href="./?action=supprRayonPlein">Supprimer rayon plein</a></li>
                <li id="logo"></li>
            </ul>
    </nav>
    <div id="bouton">
        <div></div>
        <div></div>
        <div></div>
    </div>
    <ul id="menuContextuel">
        <li>Menu contextuel</li>
        <?php if (isset($menuBurger)) { ?>
            <?php for ($i = 0; $i < count($menuBurger); $i++) { ?>
                <li>
                    <a href="<?php echo $menuBurger[$i]['url']; ?>">
                        <?php echo $menuBurger[$i]['label']; ?>
                    </a>
                </li>
            <?php } ?>
        <?php } ?>
    </ul>

    <div id="corps">