<?php

namespace Stocks\AchatBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Demande
 *
 * @ORM\Table(name="demande")
 * @ORM\Entity(repositoryClass="Stocks\AchatBundle\Repository\DemandeRepository")
 */
class Demande
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
     * @ORM\Column(name="numDemande", type="integer")
     */
    private $numDemande;

    /**
     * @var string
     *
     * @ORM\Column(name="objetDemande", type="text")
     */
    private $objetDemande;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateEmission", type="date")
     */
    private $dateEmission;

    /**
     * @var string
     *
     * @ORM\Column(name="adresseLivraison", type="string", length=255)
     */
    private $adresseLivraison;

    /**
     * @var string
     *
     * @ORM\Column(name="nomEmetteur", type="string", length=255)
     */
    private $nomEmetteur;


    /**
     * Get id
     *
     * @return integer 
     */
    public function __construct()
    {
        $this->dateEmission = new \Datetime();
    }
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set numDemande
     *
     * @param integer $numDemande
     * @return Demande
     */
    public function setNumDemande($numDemande)
    {
        $this->numDemande = $numDemande;

        return $this;
    }

    /**
     * Get numDemande
     *
     * @return integer 
     */
    public function getNumDemande()
    {
        return $this->numDemande;
    }

    /**
     * Set objetDemande
     *
     * @param string $objetDemande
     * @return Demande
     */
    public function setObjetDemande($objetDemande)
    {
        $this->objetDemande = $objetDemande;

        return $this;
    }

    /**
     * Get objetDemande
     *
     * @return string 
     */
    public function getObjetDemande()
    {
        return $this->objetDemande;
    }

    /**
     * Set dateEmission
     *
     * @param \DateTime $dateEmission
     * @return Demande
     */
    public function setDateEmission($dateEmission)
    {
        $this->dateEmission = $dateEmission;

        return $this;
    }

    /**
     * Get dateEmission
     *
     * @return \DateTime 
     */
    public function getDateEmission()
    {
        return $this->dateEmission;
    }

    /**
     * Set adresseLivraison
     *
     * @param string $adresseLivraison
     * @return Demande
     */
    public function setAdresseLivraison($adresseLivraison)
    {
        $this->adresseLivraison = $adresseLivraison;

        return $this;
    }

    /**
     * Get adresseLivraison
     *
     * @return string 
     */
    public function getAdresseLivraison()
    {
        return $this->adresseLivraison;
    }

    /**
     * Set nomEmetteur
     *
     * @param string $nomEmetteur
     * @return Demande
     */
    public function setNomEmetteur($nomEmetteur)
    {
        $this->nomEmetteur = $nomEmetteur;

        return $this;
    }

    /**
     * Get nomEmetteur
     *
     * @return string 
     */
    public function getNomEmetteur()
    {
        return $this->nomEmetteur;
    }
}
