
<h1>Liste des rayons</h1>

<ul>
    <?php foreach ($lesRayons as $unRayon) { ?>
        <li> <?= $unRayon->getId() ?> 
            - <?= $unRayon->getLibelle() ?>
            <ul>
                <?php foreach ($unRayon->getLesProduits() as $unProduit) { ?>
                    <li> 
                        <?= $unProduit->getNom() ?> 
                    </li>
                <?php } ?>
            </ul>
        </li>

    <?php } ?>
</ul>
<form action="./?action=gestRayon" method="POST">
    <input type="text" name="libelle" placeholder="Nouveau rayon" /><br />

    <input type="submit" value="Enregistrer" />
</form>


