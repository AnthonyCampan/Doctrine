
<h1>Modifier le  produit <?= $unProduit->getNom() ?></h1>
<form action="./?action=updProduit&id=<?= $unProduit->getId() ?>" method="POST">
    nom : <input type="text" name="nom" placeholder="Nouveau nom" value="<?= $unProduit->getNom() ?>" /><br />
    rayon : <SELECT name="idRayon" size="1">
        <?php foreach ($lesRayons as $unRayon) { ?>
            <?php
            if ($unRayon == $unProduit->getLeRayon()) {
                $selectionne = "selected";
            } else {
                $selectionne = "";
            }
            ?>
            <option value="<?= $unRayon->getId() ?>" <?= $selectionne ?> >
                <?= $unRayon->getLibelle() ?>
            </option>
        <?php } ?>
    </select>
    <br>
    <input type="submit" value="Enregistrer" />
</form>


