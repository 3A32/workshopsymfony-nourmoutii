<?php

namespace App\Entity;

use App\Repository\StudentRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: StudentRepository::class)]
class Student
{
    #[ORM\Id]
   
    #[ORM\Column(length: 10)]
    private ?string $nce = null;

    #[ORM\Column(length: 150)]
    private ?string $title = null;

    public function getnce(): ?string
    {
        return $this->nce;
    }
    public function setnce(string $nce): self
    {
        $this->nce = $nce;

        return $this;
    }
    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }
}
