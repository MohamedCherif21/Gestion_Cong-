<?php

namespace App\Entity;

use App\Repository\EmployeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EmployeRepository::class)]
class Employe
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom_employe = null;

    #[ORM\Column(length: 255)]
    private ?string $email = null;

    #[ORM\Column(length: 255)]
    private ?string $password = null;

    #[ORM\Column(length: 255)]
    private ?string $numtel = null;

    #[ORM\Column(length: 255)]
    private ?string $adresse = null;

    #[ORM\Column(length: 255)]
    private ?string $age = null;

    #[ORM\OneToMany(mappedBy: 'employe', targetEntity: SoldeConge::class)]
    private Collection $soldeConges;

    #[ORM\OneToMany(mappedBy: 'employe', targetEntity: Conge::class)]
    private Collection $conges;

    #[ORM\Column(length: 255)]
    private ?string $carte_bancaire = null;

    public function __toString()
    {
        return $this -> nom_employe ;
    }

   
    public function __construct()
    {
        $this->soldeConges = new ArrayCollection();
        $this->conges = new ArrayCollection();
        
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomEmploye(): ?string
    {
        return $this->nom_employe;
    }

    public function setNomEmploye(string $nom_employe): self
    {
        $this->nom_employe = $nom_employe;

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

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getNumtel(): ?string
    {
        return $this->numtel;
    }

    public function setNumtel(string $numtel): self
    {
        $this->numtel = $numtel;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getAge(): ?string
    {
        return $this->age;
    }

    public function setAge(string $age): self
    {
        $this->age = $age;

        return $this;
    }

    /**
     * @return Collection<int, SoldeConge>
     */
    public function getSoldeConges(): Collection
    {
        return $this->soldeConges;
    }

    public function addSoldeConge(SoldeConge $soldeConge): self
    {
        if (!$this->soldeConges->contains($soldeConge)) {
            $this->soldeConges->add($soldeConge);
            $soldeConge->setEmploye($this);
        }

        return $this;
    }

    public function removeSoldeConge(SoldeConge $soldeConge): self
    {
        if ($this->soldeConges->removeElement($soldeConge)) {
            // set the owning side to null (unless already changed)
            if ($soldeConge->getEmploye() === $this) {
                $soldeConge->setEmploye(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Conge>
     */
    public function getConges(): Collection
    {
        return $this->conges;
    }

    public function addConge(Conge $conge): self
    {
        if (!$this->conges->contains($conge)) {
            $this->conges->add($conge);
            $conge->setEmploye($this);
        }

        return $this;
    }

    public function removeConge(Conge $conge): self
    {
        if ($this->conges->removeElement($conge)) {
            // set the owning side to null (unless already changed)
            if ($conge->getEmploye() === $this) {
                $conge->setEmploye(null);
            }
        }

        return $this;
    }

    public function getCarteBancaire(): ?string
    {
        return $this->carte_bancaire;
    }

    public function setCarteBancaire(string $carte_bancaire): self
    {
        $this->carte_bancaire = $carte_bancaire;

        return $this;
    }

}
