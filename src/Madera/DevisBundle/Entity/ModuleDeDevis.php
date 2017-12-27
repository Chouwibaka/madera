<?php

namespace Madera\DevisBundle\Entity;

/**
 * ModuleDeDevis
 */
class ModuleDeDevis
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $idDevis;

    /**
     * @var int
     */
    private $idModule;


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
     * Set idDevis
     *
     * @param integer $idDevis
     *
     * @return moduleDeDevis
     */
    public function setIdDevis($idDevis)
    {
        $this->idDevis = $idDevis;

        return $this;
    }

    /**
     * Get idDevis
     *
     * @return int
     */
    public function getIdDevis()
    {
        return $this->idDevis;
    }

    /**
     * Set idModule
     *
     * @param integer $idModule
     *
     * @return moduleDeDevis
     */
    public function setIdModule($idModule)
    {
        $this->idModule = $idModule;

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
}

