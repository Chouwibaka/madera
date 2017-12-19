<?php

namespace Madera\DevisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Devis
 *
 * @ORM\Table(name="devis")
 * @ORM\Entity(repositoryClass="Madera\DevisBundle\Repository\DevisRepository")
 */
class Devis
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
     * @var int
     *
     * @ORM\Column(name="idModele", type="integer", nullable=true)
     */
    private $idModele;

    /**
     * @var int
     *
     * @ORM\Column(name="gamme", type="integer", nullable=true)
     */
    private $gamme;


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
     * Set idModele
     *
     * @param integer $idModele
     *
     * @return Devis
     */
    public function setIdModele($idModele)
    {
        $this->idModele = $idModele;

        return $this;
    }

    /**
     * Get idModele
     *
     * @return int
     */
    public function getIdModele()
    {
        return $this->idModele;
    }

    /**
     * Set gamme
     *
     * @param integer $gamme
     *
     * @return Devis
     */
    public function setGamme($gamme)
    {
        $this->gamme = $gamme;

        return $this;
    }

    /**
     * Get gamme
     *
     * @return int
     */
    public function getGamme()
    {
        return $this->gamme;
    }
}

