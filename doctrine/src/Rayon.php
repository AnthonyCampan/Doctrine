<?php

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="rayon")
 */
class Rayon {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $id;

    /**
     * @ORM\Column(type="string") 
     */
    private $libelle;

    /**
     * 
      @ORM\OneToMany(targetEntity="Produit", mappedBy="leRayon")
     */
    private $lesProduits;

    public function __construct() {
        $this->lesProduits = new ArrayCollection();
    }

    public function getId() {
        return $this->id;
    }

    public function getLibelle() {
        return $this->libelle;
    }

    public function setLibelle($libelle) {
        $this->libelle = $libelle;
    }

    public function addProduit($unProduit) {
        $this->lesProduits[] = $unProduit;
    }
    
    public function getLesProduits(){
        return $this->lesProduits;
    }

}
