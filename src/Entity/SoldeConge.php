<?php

namespace App\Entity;

use App\Repository\SoldeCongeRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
//use Symfony\Component\Validator\Constraints\Unique;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

#[UniqueEntity(
    fields: ['employe'],
    message: 'cet employe existe déja ! pour modifier son solde cliquer sur edit  ',
)]
#[ORM\Entity(repositoryClass: SoldeCongeRepository::class)]
class SoldeConge
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    #[Assert\NotBlank (message : "vous devez indiquer le nombre de jours")]
    #[Assert\Positive (message : " le nombre de jours doit etre positive")]
    private ?int $solde_compensation = null;

    #[ORM\Column]
    #[Assert\NotBlank (message : "vous devez indiquer le nombre de jours")]
    #[Assert\Positive (message : " le nombre de jours doit etre positive")]
    private ?int $solde_maladie = null;

    #[ORM\Column]
    #[Assert\NotBlank (message : "vous devez indiquer le nombre de jours")]
    #[Assert\Positive (message : " le nombre de jours doit etre positive")]
    private ?int $solde_exception = null;

    #[ORM\Column]
    #[Assert\NotBlank (message : "vous devez indiquer le nombre de jours")]
    #[Assert\Positive (message : " le nombre de jours doit etre positive")]
    private ?int $solde_annuel = null;

    #[ORM\ManyToOne(inversedBy: 'soldeConges')]
    #[ORM\JoinColumn(onDelete:"CASCADE") ]
    #[Assert\NotBlank (message : "entrer le nom de l'employe")]
    private ?Employe $employe = null;

    public function __toString()
    {
        return $this ->id;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSoldeCompensation(): ?int
    {
        return $this->solde_compensation;
    }

    public function setSoldeCompensation(int $solde_compensation): self
    {
        $this->solde_compensation = $solde_compensation;

        return $this;
    }

    public function getSoldeMaladie(): ?int
    {
        return $this->solde_maladie;
    }

    public function setSoldeMaladie(int $solde_maladie): self
    {
        $this->solde_maladie = $solde_maladie;

        return $this;
    }

    public function getSoldeException(): ?int
    {
        return $this->solde_exception;
    }

    public function setSoldeException(int $solde_exception): self
    {
        $this->solde_exception = $solde_exception;

        return $this;
    }

    public function getSoldeAnnuel(): ?int
    {
        return $this->solde_annuel;
    }

    public function setSoldeAnnuel(int $solde_annuel): self
    {
        $this->solde_annuel = $solde_annuel;

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
}
