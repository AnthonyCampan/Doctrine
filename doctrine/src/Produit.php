<?php

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="ProduitRepository")
 * @ORM\Table(name="produit")
 */
class Produit {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $id;

    /**
     * @ORM\Column(type="string") 
     */
    private $nom;

    /**
     * 
      @ORM\ManyToOne(targetEntity="Rayon", inversedBy="lesProduits")
     */
    private $leRayon;

    public function getId() {
        return $this->id;
    }

    public function getNom() {
        return $this->nom;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function setLeRayon($unRayon) {
        $unRayon->addProduit($this);
        $this->leRayon = $unRayon;
    }
    
    public function getLeRayon(){
        return $this->leRayon;
    }

}
