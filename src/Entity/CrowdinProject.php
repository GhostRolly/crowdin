<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CrowdinProjectRepository")
 */
class CrowdinProject
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Name;

    /**
     * @ORM\Column(type="integer")
     */
    private $User;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $BaseLang;

    /**
     * @ORM\Column(type="string", length=32768, nullable=true)
     */
    private $Content;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(string $Name): self
    {
        $this->Name = $Name;

        return $this;
    }

    public function getUser(): ?int
    {
        return $this->User;
    }

    public function setUser(int $User): self
    {
        $this->User = $User;

        return $this;
    }

    public function getBaseLang(): ?string
    {
        return $this->BaseLang;
    }

    public function setBaseLang(string $BaseLang): self
    {
        $this->BaseLang = $BaseLang;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->Content;
    }

    public function setContent(?string $Content): self
    {
        $this->Content = $Content;

        return $this;
    }
}
