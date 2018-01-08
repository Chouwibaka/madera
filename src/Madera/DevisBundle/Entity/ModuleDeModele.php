<?php

namespace Madera\DevisBundle\Entity;

/**
 * ModuleDeModele
 */
class ModuleDeModele
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
     * @return moduleDeModele
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
     * @return moduleDeModele
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
     * @return moduleDeModele
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


