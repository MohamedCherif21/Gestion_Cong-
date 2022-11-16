<?php

namespace App\Entity;

use App\Repository\CongeRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: CongeRepository::class)]
class Conge
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Assert\NotBlank (message : "la date de depart est obligatoire")]
    private ?\DateTimeInterface $datedepart = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Assert\NotBlank (message : "la date de retour est obligatoire")]
    private ?\DateTimeInterface $dateretour = null;

    #[ORM\Column]
    #[Assert\NotBlank (message : "vous devez indiquer le nombre de jours")]
    #[Assert\Positive (message : "le nombre de jours doit etre positive")]
    private ?int $nb_jours = null;

    #[ORM\Column(length: 255)]
    private ?string $type = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank (message : "vous devez donner un motif")]
    private ?string $motif = null;

    #[ORM\ManyToOne(inversedBy: 'conges')]
    #[ORM\JoinColumn(onDelete:"CASCADE") ]
    private ?Employe $employe = null;

   /* #[ORM\OneToOne]
    #[ORM\JoinColumn(onDelete:"CASCADE") ]
    #[Assert\NotBlank (message : "vous devez indiquer l'id de votre solde de conge'")]
    private ?SoldeConge $solde = null;*/

    #[ORM\Column(length: 255)]
    private ?string $etat = "en attente...";


    public function getId(): ?int
    {
        return $this->id;
    }


    public function getDatedepart(): ?\DateTimeInterface
    {
        return $this->datedepart;
    }

    public function setDatedepart(\DateTimeInterface $datedepart): self
    {
        $this->datedepart = $datedepart;

        return $this;
    }

    public function getDateretour(): ?\DateTimeInterface
    {
        return $this->dateretour;
    }

    public function setDateretour(\DateTimeInterface $dateretour): self
    {
        $this->dateretour = $dateretour;

        return $this;
    }

    public function getNbJours(): ?int
    {
        return $this->nb_jours;
    }

    public function setNbJours(int $nb_jours): self
    {
        $this->nb_jours = $nb_jours;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getMotif(): ?string
    {
        return $this->motif;
    }

    public function setMotif(string $motif): self
    {
        $this->motif = $motif;

        return $this;
    }

    public function getEmploye(): ?Employe
    {
        return $this->employe;
    }

    public function setEmploye(?Employe $employe): self
    {
        $this->employe = $employe;

        return $this;
    }

   /* public function getSolde(): ?SoldeConge
    {
        return $this->solde;
    }

    public function setSolde(?SoldeConge $solde): self
    {
        $this->solde = $solde;

        return $this;
    }*/

    public function getEtat(): ?string
    {
        return $this->etat;
    }

    public function setEtat(string $etat): self
    {
        $this->etat = $etat;

        return $this;
    }

    
}
