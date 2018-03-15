<?php

namespace FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Nourriture
 *
 * @ORM\Table(name="nourriture")
 * @ORM\Entity(repositoryClass="FrontBundle\Repository\RepasRepository")
 */
class Nourriture
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nomRepas", type="string", length=32)
     */
    private $nomRepas;

    /**
     * @var int
     *
     * @ORM\Column(name="portion", type="integer")
     */
    private $portion;

    /**
     * @var int
     *
     * @ORM\Column(name="calorie", type="integer")
     */
    private $calorie;

    /**
     * @var int
     *
     * @ORM\Column(name="matiereGrasse", type="integer")
     */
    private $matiereGrasse;

    /**
     * @var int
     *
     * @ORM\Column(name="glucide", type="integer")
     */
    private $glucide;

    /**
     * @var int
     *
     * @ORM\Column(name="proteine", type="integer")
     */
    private $proteine;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nomRepas
     *
     * @param string $nomRepas
     *
     * @return Nourriture
     */
    public function setNomRepas($nomRepas)
    {
        $this->nomRepas = $nomRepas;

        return $this;
    }

    /**
     * Get nomRepas
     *
     * @return string
     */
    public function getNomRepas()
    {
        return $this->nomRepas;
    }

    /**
     * Set portion
     *
     * @param integer $portion
     *
     * @return Nourriture
     */
    public function setPortion($portion)
    {
        $this->portion = $portion;

        return $this;
    }

    /**
     * Get portion
     *
     * @return int
     */
    public function getPortion()
    {
        return $this->portion;
    }

    /**
     * Set calorie
     *
     * @param integer $calorie
     *
     * @return Nourriture
     */
    public function setCalorie($calorie)
    {
        $this->calorie = $calorie;

        return $this;
    }

    /**
     * Get calorie
     *
     * @return int
     */
    public function getCalorie()
    {
        return $this->calorie;
    }

    /**
     * Set matiereGrasse
     *
     * @param integer $matiereGrasse
     *
     * @return Nourriture
     */
    public function setMatiereGrasse($matiereGrasse)
    {
        $this->matiereGrasse = $matiereGrasse;

        return $this;
    }

    /**
     * Get matiereGrasse
     *
     * @return int
     */
    public function getMatiereGrasse()
    {
        return $this->matiereGrasse;
    }

    /**
     * Set glucide
     *
     * @param integer $glucide
     *
     * @return Nourriture
     */
    public function setGlucide($glucide)
    {
        $this->glucide = $glucide;

        return $this;
    }

    /**
     * Get glucide
     *
     * @return int
     */
    public function getGlucide()
    {
        return $this->glucide;
    }

    /**
     * Set proteine
     *
     * @param integer $proteine
     *
     * @return Nourriture
     */
    public function setProteine($proteine)
    {
        $this->proteine = $proteine;

        return $this;
    }

    /**
     * Get proteine
     *
     * @return int
     */
    public function getProteine()
    {
        return $this->proteine;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Nourriture
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
}

