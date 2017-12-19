<?php

namespace Madera\DevisBundle\Entity;

/**
 * modulesdemodele
 */
class modulesdemodele
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
     * @var int
     */
    private $idModule;
	
	/**
     * @var int
     */
    private $quantite;

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
     * @return modulesdemodele
     */
    public function setIdModele($idModele)
    {
        $this->idModele = $idModele;

        return $this;
    }

    /**
     * Get idModule
     *
     * @return int
     */
    public function getIdModule()
    {
        return $this->idModule;
    }
	
	 /**
     * Set idModule
     *
     * @param integer $idModule
     *
     * @return modulesdemodele
     */
    public function setIdModule($idModule)
    {
        $this->idModule = $idModule;

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
     * Set quantite
     *
     * @param integer $quantite
     *
     * @return modulesdemodele
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;

        return $this;
    }

    /**
     * Get quantite
     *
     * @return int
     */
    public function getQuantite()
    {
        return $this->quantite;
    }
}


