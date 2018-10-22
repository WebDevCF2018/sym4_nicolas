<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Lespages
 *
 * @ORM\Table(name="lespages", indexes={@ORM\Index(name="fk_lespages_auteur1_idx", columns={"auteur_idauteur"})})
 * @ORM\Entity
 */
class Lespages
{
    /**
     * @var int
     *
     * @ORM\Column(name="idlespages", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idlespages;

    /**
     * @var string
     *
     * @ORM\Column(name="letitre", type="string", length=250, nullable=false)
     */
    private $letitre;

    /**
     * @var string
     *
     * @ORM\Column(name="letexte", type="text", length=65535, nullable=false)
     */
    private $letexte;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="ladate", type="datetime", nullable=true, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $ladate = 'CURRENT_TIMESTAMP';

    /**
     * @var \Auteur
     *
     * @ORM\ManyToOne(targetEntity="Auteur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="auteur_idauteur", referencedColumnName="idauteur")
     * })
     */
    private $auteurauteur;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Rubriques", inversedBy="lespageslespages")
     * @ORM\JoinTable(name="lespages_has_rubriques",
     *   joinColumns={
     *     @ORM\JoinColumn(name="lespages_idlespages", referencedColumnName="idlespages")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="rubriques_idrubriques", referencedColumnName="idrubriques")
     *   }
     * )
     */
    private $rubriquesrubriques;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->rubriquesrubriques = new \Doctrine\Common\Collections\ArrayCollection();
        $this->setLadate(new \DateTime());
    }

    public function getIdlespages(): ?int
    {
        return $this->idlespages;
    }

    public function getLetitre(): ?string
    {
        return $this->letitre;
    }

    public function setLetitre(string $letitre): self
    {
        $this->letitre = $letitre;

        return $this;
    }

    public function getLetexte(): ?string
    {
        return $this->letexte;
    }

    public function setLetexte(string $letexte): self
    {
        $this->letexte = $letexte;

        return $this;
    }

    public function getLadate(): ?\DateTimeInterface
    {
        return $this->ladate;
    }

    public function setLadate(?\DateTimeInterface $ladate): self
    {
        $this->ladate = $ladate;

        return $this;
    }

    public function getAuteurauteur(): ?Auteur
    {
        return $this->auteurauteur;
    }

    public function setAuteurauteur(?Auteur $auteurauteur): self
    {
        $this->auteurauteur = $auteurauteur;

        return $this;
    }

    /**
     * @return Collection|Rubriques[]
     */
    public function getRubriquesrubriques(): Collection
    {
        return $this->rubriquesrubriques;
    }

    public function addRubriquesrubrique(Rubriques $rubriquesrubrique): self
    {
        if (!$this->rubriquesrubriques->contains($rubriquesrubrique)) {
            $this->rubriquesrubriques[] = $rubriquesrubrique;
        }

        return $this;
    }

    public function removeRubriquesrubrique(Rubriques $rubriquesrubrique): self
    {
        if ($this->rubriquesrubriques->contains($rubriquesrubrique)) {
            $this->rubriquesrubriques->removeElement($rubriquesrubrique);
        }

        return $this;
    }

}
