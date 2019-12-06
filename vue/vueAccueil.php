

<h1>Liste de tous les produits</h1>
<?php
foreach ($lesProduits as $unProduit) {
    ?>
    <div class="card">
        <div class="descrCard">
            <a href='./?action=detailProduit&id=<?=$unProduit->getId()?>'>
            <?= $unProduit->getNom() ?></a>
            <br />
            <?= $unProduit->getId() ?>
        </div>
    </div>

    <?php
}
?>

