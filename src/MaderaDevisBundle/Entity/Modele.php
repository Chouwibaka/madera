<?php

namespace MaderaDevisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Modele
 *
 * @ORM\Table(name="modele")
 * @ORM\Entity(repositoryClass="MaderaDevisBundle\Repository\ModeleRepository")
 */
class Modele
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @ORM\ManyToMany(targetEntity="Gamme")
     * @ORM\JoinTable(name="modele_gammes")
     */
    private $gammes;

    /**
     * @ORM\ManyToMany(targetEntity="Module")
     * @ORM\JoinTable(name="modele_modules")
     */
    private $modules;


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
     * Set name
     *
     * @param string $name
     *
     * @return Modele
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set tarif
     *
     * @param string $tarif
     *
     * @return Modele
     */
    public function setTarif($tarif)
    {
        $this->tarif = $tarif;

        return $this;
    }

    /**
     * Get tarif
     *
     * @return string
     */
    public function getTarif()
    {
        return $this->tarif;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->gammes = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add gamme
     *
     * @param \MaderaDevisBundle\Entity\Gamme $gamme
     *
     * @return Modele
     */
    public function addGamme(\MaderaDevisBundle\Entity\Gamme $gamme)
    {
        $this->gammes[] = $gamme;

        return $this;
    }

    /**
     * Remove gamme
     *
     * @param \MaderaDevisBundle\Entity\Gamme $gamme
     */
    public function removeGamme(\MaderaDevisBundle\Entity\Gamme $gamme)
    {
        $this->gammes->removeElement($gamme);
    }

    /**
     * Get gammes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getGammes()
    {
        return $this->gammes;
    }

    /**
     * Add module
     *
     * @param \MaderaDevisBundle\Entity\Module $module
     *
     * @return Modele
     */
    public function addModule(\MaderaDevisBundle\Entity\Module $module)
    {
        $this->modules[] = $module;

        return $this;
    }

    /**
     * Remove module
     *
     * @param \MaderaDevisBundle\Entity\Module $module
     */
    public function removeModule(\MaderaDevisBundle\Entity\Module $module)
    {
        $this->modules->removeElement($module);
    }

    /**
     * Get modules
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getModules()
    {
        return $this->modules;
    }

    public function __toString()
    {
        return $this->name;
    }
}
