<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Rubriques
 *
 * @ORM\Table(name="rubriques")
 * @ORM\Entity
 */
class Rubriques
{
    /**
     * @var int
     *
     * @ORM\Column(name="idrubriques", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idrubriques;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=120, nullable=false)
     */
    private $titre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ladesc", type="string", length=500, nullable=true)
     */
    private $ladesc;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Lespages", mappedBy="rubriquesrubriques")
     */
    private $lespageslespages;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->lespageslespages = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getIdrubriques(): ?int
    {
        return $this->idrubriques;
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

    public function getLadesc(): ?string
    {
        return $this->ladesc;
    }

    public function setLadesc(?string $ladesc): self
    {
        $this->ladesc = $ladesc;

        return $this;
    }

    /**
     * @return Collection|Lespages[]
     */
    public function getLespageslespages(): Collection
    {
        return $this->lespageslespages;
    }

    public function addLespageslespage(Lespages $lespageslespage): self
    {
        if (!$this->lespageslespages->contains($lespageslespage)) {
            $this->lespageslespages[] = $lespageslespage;
            $lespageslespage->addRubriquesrubrique($this);
        }

        return $this;
    }

    public function removeLespageslespage(Lespages $lespageslespage): self
    {
        if ($this->lespageslespages->contains($lespageslespage)) {
            $this->lespageslespages->removeElement($lespageslespage);
            $lespageslespage->removeRubriquesrubrique($this);
        }

        return $this;
    }

}
