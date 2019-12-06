<h1>Supprimer un rayon plein</h1>
<form action="./?action=supprRayonPlein" method="POST">
    <select name="idRayon" size="1">
        <?php foreach ($lesRayons as $unRayon) { 
            if(count($unRayon->getLesProduits()) != 0){?>
                <option value="<?= $unRayon->getId() ?>">
                    <?= $unRayon->getId() ?> - <?= $unRayon->getLibelle() ?>
                </option>
            <?php } } ?>
    </select><br />
    <input type="submit" value="Supprimer" />
</form>