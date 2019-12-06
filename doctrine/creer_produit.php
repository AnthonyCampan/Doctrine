<?php
// creer_produit.php <nom>
require_once "bootstrap.php";

$nom = $argv[1];

$produit = new Produit();
$produit->setNom($nom);

$entityManager->persist($produit);
$entityManager->flush();

echo "Produit créé avec l'id " . $produit->getId() . "\n";
