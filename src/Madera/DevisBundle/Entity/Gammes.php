<?php

namespace Madera\DevisBundle\Entity;

/**
 * Gammes
 */
class Gammes
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $idModele;

    /**
     * @var string
     */
    private $nom;


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
     * @return gammes
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
     * Set nom
     *
     * @param string $nom
     *
     * @return gammes
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }
}

