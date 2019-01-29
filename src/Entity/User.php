<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity
 */
class User
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom", type="string", length=50, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="Prenom", type="string", length=50, nullable=false)
     */
    private $prenom;

    /**
     * @var bool
     *
     * @ORM\Column(name="Sexe", type="boolean", nullable=false)
     */
    private $sexe;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateNaissance", type="date", nullable=false)
     */
    private $datenaissance;

    /**
     * @var string
     *
     * @ORM\Column(name="Nationalité", type="string", length=50, nullable=false)
     */
    private $nationalite;

    /**
     * @var string
     *
     * @ORM\Column(name="Téléphone", type="string", length=10, nullable=false)
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="Addresse", type="string", length=100, nullable=false)
     */
    private $addresse;

    /**
     * @var string
     *
     * @ORM\Column(name="CodePostale", type="string", length=10, nullable=false)
     */
    private $codepostale;

    /**
     * @var string
     *
     * @ORM\Column(name="Ville", type="string", length=50, nullable=false)
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="Email", type="string", length=50, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="Mdp", type="string", length=100, nullable=false)
     */
    private $mdp;

    /**
     * @var int
     *
     * @ORM\Column(name="RecevoirMail", type="integer", nullable=false)
     */
    private $recevoirmail;

    /**
     * @var bool
     *
     * @ORM\Column(name="Accident", type="boolean", nullable=false)
     */
    private $accident;

    /**
     * @var bool
     *
     * @ORM\Column(name="DroitImage", type="boolean", nullable=false)
     */
    private $droitimage;

    /**
     * @var string
     *
     * @ORM\Column(name="InfoComplementaire", type="text", length=65535, nullable=false)
     */
    private $infocomplementaire;

    /**
     * @var int
     *
     * @ORM\Column(name="IdRole", type="integer", nullable=false)
     */
    private $idrole;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getSexe(): ?bool
    {
        return $this->sexe;
    }

    public function setSexe(bool $sexe): self
    {
        $this->sexe = $sexe;

        return $this;
    }

    public function getDatenaissance(): ?\DateTimeInterface
    {
        return $this->datenaissance;
    }

    public function setDatenaissance(\DateTimeInterface $datenaissance): self
    {
        $this->datenaissance = $datenaissance;

        return $this;
    }

    public function getNationalite(): ?string
    {
        return $this->nationalite;
    }

    public function setNationalite(string $nationalite): self
    {
        $this->nationalite = $nationalite;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(string $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getAddresse(): ?string
    {
        return $this->addresse;
    }

    public function setAddresse(string $addresse): self
    {
        $this->addresse = $addresse;

        return $this;
    }

    public function getCodepostale(): ?string
    {
        return $this->codepostale;
    }

    public function setCodepostale(string $codepostale): self
    {
        $this->codepostale = $codepostale;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getMdp(): ?string
    {
        return $this->mdp;
    }

    public function setMdp(string $mdp): self
    {
        $this->mdp = $mdp;

        return $this;
    }

    public function getRecevoirmail(): ?int
    {
        return $this->recevoirmail;
    }

    public function setRecevoirmail(int $recevoirmail): self
    {
        $this->recevoirmail = $recevoirmail;

        return $this;
    }

    public function getAccident(): ?bool
    {
        return $this->accident;
    }

    public function setAccident(bool $accident): self
    {
        $this->accident = $accident;

        return $this;
    }

    public function getDroitimage(): ?bool
    {
        return $this->droitimage;
    }

    public function setDroitimage(bool $droitimage): self
    {
        $this->droitimage = $droitimage;

        return $this;
    }

    public function getInfocomplementaire(): ?string
    {
        return $this->infocomplementaire;
    }

    public function setInfocomplementaire(string $infocomplementaire): self
    {
        $this->infocomplementaire = $infocomplementaire;

        return $this;
    }

    public function getIdrole(): ?int
    {
        return $this->idrole;
    }

    public function setIdrole(int $idrole): self
    {
        $this->idrole = $idrole;

        return $this;
    }


}
