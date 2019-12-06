<h1>Produit</h1>

<div class="card">
    <div class="descrCard">
        id : <?= $unProduit->getId() ?>        
        <br />

        nom : <?= $unProduit->getNom() ?>
        <br />

        rayon :  
        <?php
        if ($leRayon != null) {
            echo $leRayon->getLibelle();
        }
        ?>
        <br />
        <a href="./?action=updProduit&id=<?= $unProduit->getId() ?>">Modifier le produit</a>
    </div>
</div>



