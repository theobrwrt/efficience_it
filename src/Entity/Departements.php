<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity(repositoryClass="App\Repository\DepartementsRepository")
 */
class Departements
{

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=25)
     */
    private $dep_nom;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $dep_mail;



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDepNom(): ?string
    {
        return $this->dep_nom;
    }

    public function setDepNom(string $dep_nom): self
    {
        $this->dep_nom = $dep_nom;

        return $this;
    }

    public function getDepMail(): ?string
    {
        return $this->dep_mail;
    }

    public function setDepMail(string $dep_mail): self
    {
        $this->dep_mail = $dep_mail;

        return $this;
    }


}