<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Auteur
 *
 * @ORM\Table(name="auteur", uniqueConstraints={@ORM\UniqueConstraint(name="lenom_UNIQUE", columns={"lelogin"})})
 * @ORM\Entity
 */
class Auteur
{
    /**
     * @var int
     *
     * @ORM\Column(name="idauteur", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idauteur;

    /**
     * @var string
     *
     * @ORM\Column(name="lelogin", type="string", length=100, nullable=false)
     */
    private $lelogin;

    /**
     * @var string
     *
     * @ORM\Column(name="lemdp", type="string", length=100, nullable=false)
     */
    private $lemdp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lenom", type="string", length=150, nullable=true)
     */
    private $lenom;

    public function getIdauteur(): ?int
    {
        return $this->idauteur;
    }

    public function getLelogin(): ?string
    {
        return $this->lelogin;
    }

    public function setLelogin(string $lelogin): self
    {
        $this->lelogin = $lelogin;

        return $this;
    }

    public function getLemdp(): ?string
    {
        return $this->lemdp;
    }

    public function setLemdp(string $lemdp): self
    {
        $this->lemdp = $lemdp;

        return $this;
    }

    public function getLenom(): ?string
    {
        return $this->lenom;
    }

    public function setLenom(?string $lenom): self
    {
        $this->lenom = $lenom;

        return $this;
    }

    public function __toString()
    {
        return (string) $this->getLelogin();
    }

}
