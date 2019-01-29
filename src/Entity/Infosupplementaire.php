<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Infosupplementaire
 *
 * @ORM\Table(name="infosupplementaire")
 * @ORM\Entity
 */
class Infosupplementaire
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var bool
     *
     * @ORM\Column(name="Assurance", type="boolean", nullable=false)
     */
    private $assurance;

    /**
     * @var bool
     *
     * @ORM\Column(name="Garantie", type="boolean", nullable=false)
     */
    private $garantie;

    /**
     * @var int
     *
     * @ORM\Column(name="OptionGarantie", type="integer", nullable=false)
     */
    private $optiongarantie;

    /**
     * @var int
     *
     * @ORM\Column(name="type_paiement", type="integer", nullable=false)
     */
    private $typePaiement;

    /**
     * @var bool
     *
     * @ORM\Column(name="demande_facture", type="boolean", nullable=false)
     */
    private $demandeFacture;

    /**
     * @var string
     *
     * @ORM\Column(name="niveau_technique", type="string", length=250, nullable=false)
     */
    private $niveauTechnique;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_creation", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $dateCreation = 'CURRENT_TIMESTAMP';

    /**
     * @var bool
     *
     * @ORM\Column(name="pass_jeune", type="boolean", nullable=false)
     */
    private $passJeune;

    /**
     * @var bool
     *
     * @ORM\Column(name="dossier_complet", type="boolean", nullable=false)
     */
    private $dossierComplet;

    /**
     * @var int
     *
     * @ORM\Column(name="idUser", type="integer", nullable=false)
     */
    private $iduser;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAssurance(): ?bool
    {
        return $this->assurance;
    }

    public function setAssurance(bool $assurance): self
    {
        $this->assurance = $assurance;

        return $this;
    }

    public function getGarantie(): ?bool
    {
        return $this->garantie;
    }

    public function setGarantie(bool $garantie): self
    {
        $this->garantie = $garantie;

        return $this;
    }

    public function getOptiongarantie(): ?int
    {
        return $this->optiongarantie;
    }

    public function setOptiongarantie(int $optiongarantie): self
    {
        $this->optiongarantie = $optiongarantie;

        return $this;
    }

    public function getTypePaiement(): ?int
    {
        return $this->typePaiement;
    }

    public function setTypePaiement(int $typePaiement): self
    {
        $this->typePaiement = $typePaiement;

        return $this;
    }

    public function getDemandeFacture(): ?bool
    {
        return $this->demandeFacture;
    }

    public function setDemandeFacture(bool $demandeFacture): self
    {
        $this->demandeFacture = $demandeFacture;

        return $this;
    }

    public function getNiveauTechnique(): ?string
    {
        return $this->niveauTechnique;
    }

    public function setNiveauTechnique(string $niveauTechnique): self
    {
        $this->niveauTechnique = $niveauTechnique;

        return $this;
    }

    public function getDateCreation(): ?\DateTimeInterface
    {
        return $this->dateCreation;
    }

    public function setDateCreation(\DateTimeInterface $dateCreation): self
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    public function getPassJeune(): ?bool
    {
        return $this->passJeune;
    }

    public function setPassJeune(bool $passJeune): self
    {
        $this->passJeune = $passJeune;

        return $this;
    }

    public function getDossierComplet(): ?bool
    {
        return $this->dossierComplet;
    }

    public function setDossierComplet(bool $dossierComplet): self
    {
        $this->dossierComplet = $dossierComplet;

        return $this;
    }

    public function getIduser(): ?int
    {
        return $this->iduser;
    }

    public function setIduser(int $iduser): self
    {
        $this->iduser = $iduser;

        return $this;
    }


}
