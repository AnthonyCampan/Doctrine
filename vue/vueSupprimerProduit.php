<h1>Supprimer un produit</h1>
<form action="./?action=supprProduit" method="POST">
    <select name="idProduit" size="1">
        <?php foreach ($lesProduit as $unProduit) { ?>
            <option value="<?= $unProduit->getId() ?>">
                <?= $unProduit->getId() ?> - <?= $unProduit->getNom() ?>
            </option>
        <?php } ?>
    </select><br />
    <input type="submit" value="Supprimer" />
</form>