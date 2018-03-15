<?php

namespace FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categorie
 *
 * @ORM\Table(name="categorie")
 * @ORM\Entity(repositoryClass="FrontBundle\Repository\CategorieRepository")
 */
class Categorie
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idCategorie;

    /**
     * @var string
     *
     * @ORM\Column(name="libelleCategorie", type="string", length=40)
     */
    private $libelleCategorie;


    /**
     * Set idCategorie
     *
     * @param integer $idCategorie
     *
     * @return Categorie
     */
    public function setIdCategorie($idCategorie)
    {
        $this->idCategorie = $idCategorie;

        return $this;
    }

    /**
     * Get idCategorie
     *
     * @return int
     */
    public function getIdCategorie()
    {
        return $this->idCategorie;
    }

    /**
     * Set libelleCategorie
     *
     * @param string $libelleCategorie
     *
     * @return Categorie
     */
    public function setLibelleCategorie($libelleCategorie)
    {
        $this->libelleCategorie = $libelleCategorie;

        return $this;
    }

    /**
     * Get libelleCategorie
     *
     * @return string
     */
    public function getLibelleCategorie()
    {
        return $this->libelleCategorie;
    }
}

