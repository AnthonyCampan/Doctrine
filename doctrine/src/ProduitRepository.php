<?php

use Doctrine\ORM\EntityRepository;

class ProduitRepository extends EntityRepository
{
    
    public function getProduitsByNom($nom)
    {
        $dql = "SELECT p FROM Produit p where p.nom like :nom";

        $req = $this->getEntityManager()->createQuery($dql);
        $req->setParameter(":nom", "%$nom%");
        return $req->getResult();
    }
    
    public function getProduitsByRayon($libelle){
        $dql = "SELECT p, r FROM Produit p join p.leRayon r where r.libelle = :libelle";

        $req = $this->getEntityManager()->createQuery($dql);
        $req->setParameter(":libelle", $libelle);
        return $req->getResult();
    }
    
}
