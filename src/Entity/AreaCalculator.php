<?php

namespace App\Entity;

use App\Repository\AreaCalculatorRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Query\Expr\Math;

#[ORM\Entity(repositoryClass: AreaCalculatorRepository::class)]
class AreaCalculator
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(nullable: true)]
    private ?float $longueurObjet = null;

    #[ORM\Column(nullable: true)]
    private ?float $largeurObjet = null;

    #[ORM\Column(nullable: true)]
    private ?float $rayonObjet = null;

    #[ORM\Column(nullable: true)]
    private ?float $aireObjet = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLongueurObjet(): ?float
    {
        return $this->longueurObjet;
    }

    public function setLongueurObjet(?float $longueurObjet): static
    {
        $this->longueurObjet = $longueurObjet;

        return $this;
    }

    public function getLargeurObjet(): ?float
    {
        return $this->largeurObjet;
    }

    public function setLargeurObjet(?float $largeurObjet): static
    {
        $this->largeurObjet = $largeurObjet;

        return $this;
    }

    public function getRayonObjet(): ?float
    {
        return $this->rayonObjet;
    }

    public function setRayonObjet(?float $rayonObjet): static
    {
        $this->rayonObjet = $rayonObjet;

        return $this;
    }

    public function getAireObjet(): ?float
    {
        return $this->aireObjet;
    }

    public function setAireObjet(?float $aireObjet): static
    {
        $this->aireObjet = $aireObjet;

        return $this;
    }

    public function aireTriangle(?float $longueurObjet, ?float $largeurObjet, ?float $aireObjet): float
    {
        $aireObjet = ($longueurObjet * $largeurObjet) / 2;
        return ($aireObjet);
    }
    public function aireParallelogramme(?float $longueurObjet, ?float $largeurObjet, ?float $aireObjet): float
    {
        $aireObjet = ($longueurObjet * $largeurObjet);
        return ($aireObjet);
    }
    public function aireDisque(?float $rayonObjet, ?float $aireObjet): float
    {
        $aireObjet = (($rayonObjet * $rayonObjet) * pi());
        return $aireObjet;
    }
}
