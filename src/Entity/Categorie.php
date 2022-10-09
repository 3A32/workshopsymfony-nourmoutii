<?php

namespace App\Entity;

use App\Repository\CategorieRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CategorieRepository::class)]
class Categorie
{
    #[ORM\Id]
   # #[ORM\GeneratedValue]
    #[ORM\Column(length: 100)]
    private ?string $ref = null;

    #[ORM\Column(length: 100)]
    private ?string $titre = null;

    public function getref(): ?string
    {
        return $this->ref;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }
}
