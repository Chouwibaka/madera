<?php

namespace MaderaDevisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Devis
 *
 * @ORM\Table(name="devis")
 * @ORM\Entity(repositoryClass="MaderaDevisBundle\Repository\DevisRepository")
 */
class Devis
{
    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Modele")
     */
    private $modele;

    /**
     * @ORM\ManyToOne(targetEntity="Gamme")
     */
    private $gamme;

    /**
     * @ORM\@ManyToMany(targetEntity="Module")
     * @ORM\JoinTable(name="devis_modules")
     */


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
     * Set modele
     *
     * @param \MaderaDevisBundle\Entity\Modele $modele
     *
     * @return Devis
     */
    public function setModele(\MaderaDevisBundle\Entity\Modele $modele = null)
    {
        $this->modele = $modele;

        return $this;
    }

    /**
     * Get modele
     *
     * @return \MaderaDevisBundle\Entity\Modele
     */
    public function getModele()
    {
        return $this->modele;
    }

    /**
     * Set gamme
     *
     * @param \MaderaDevisBundle\Entity\Gamme $gamme
     *
     * @return Devis
     */
    public function setGamme(\MaderaDevisBundle\Entity\Gamme $gamme = null)
    {
        $this->gamme = $gamme;

        return $this;
    }

    /**
     * Get gamme
     *
     * @return \MaderaDevisBundle\Entity\Gamme
     */
    public function getGamme()
    {
        return $this->gamme;
    }
}
