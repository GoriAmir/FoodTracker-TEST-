<?php

namespace FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeRepas
 *
 * @ORM\Table(name="type_repas")
 * @ORM\Entity(repositoryClass="FrontBundle\Repository\TypeRepasRepository")
 */
class TypeRepas
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
     * @ORM\Column(name="libelleTypeRepas", type="string", length=40)
     */
    private $libelleTypeRepas;


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
     * Set libelleTypeRepas
     *
     * @param string $libelleTypeRepas
     *
     * @return TypeRepas
     */
    public function setLibelleTypeRepas($libelleTypeRepas)
    {
        $this->libelleTypeRepas = $libelleTypeRepas;

        return $this;
    }

    /**
     * Get libelleTypeRepas
     *
     * @return string
     */
    public function getLibelleTypeRepas()
    {
        return $this->libelleTypeRepas;
    }
}

