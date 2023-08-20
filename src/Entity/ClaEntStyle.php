<?php

namespace App\Entity;

use App\Repository\ClaEntStyleRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ClaEntStyleRepository::class)]
class ClaEntStyle
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $PropStyle = null;

    #[ORM\ManyToMany(targetEntity: ClaEntArtiste::class, mappedBy: 'PropTestAvecClaEntStyle')]
    private Collection $NeoChmpdansClaEntStylePourClaEntArtistes;

    #[ORM\ManyToMany(targetEntity: ClaEntArtiste::class, inversedBy: 'claEntStyles')]
    private Collection $PropTestAvecClaEntArtiste;

    #[ORM\ManyToMany(targetEntity: ClaEntProduit::class, mappedBy: 'PropRelProdStyle')]
    private Collection $claEntProduits;

    public function __construct()
    {
        $this->NeoChmpdansClaEntStylePourClaEntArtistes = new ArrayCollection();
        $this->PropTestAvecClaEntArtiste = new ArrayCollection();
        $this->claEntProduits = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPropStyle(): ?string
    {
        return $this->PropStyle;
    }

    public function setPropStyle(string $PropStyle): static
    {
        $this->PropStyle = $PropStyle;

        return $this;
    }

    /**
     * @return Collection<int, ClaEntArtiste>
     */
    public function getNeoChmpdansClaEntStylePourClaEntArtistes(): Collection
    {
        return $this->NeoChmpdansClaEntStylePourClaEntArtistes;
    }

    public function addNeoChmpdansClaEntStylePourClaEntArtiste(ClaEntArtiste $neoChmpdansClaEntStylePourClaEntArtiste): static
    {
        if (!$this->NeoChmpdansClaEntStylePourClaEntArtistes->contains($neoChmpdansClaEntStylePourClaEntArtiste)) {
            $this->NeoChmpdansClaEntStylePourClaEntArtistes->add($neoChmpdansClaEntStylePourClaEntArtiste);
            $neoChmpdansClaEntStylePourClaEntArtiste->addPropTestAvecClaEntStyle($this);
        }

        return $this;
    }

    public function removeNeoChmpdansClaEntStylePourClaEntArtiste(ClaEntArtiste $neoChmpdansClaEntStylePourClaEntArtiste): static
    {
        if ($this->NeoChmpdansClaEntStylePourClaEntArtistes->removeElement($neoChmpdansClaEntStylePourClaEntArtiste)) {
            $neoChmpdansClaEntStylePourClaEntArtiste->removePropTestAvecClaEntStyle($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, ClaEntArtiste>
     */
    public function getPropTestAvecClaEntArtiste(): Collection
    {
        return $this->PropTestAvecClaEntArtiste;
    }

    public function addPropTestAvecClaEntArtiste(ClaEntArtiste $propTestAvecClaEntArtiste): static
    {
        if (!$this->PropTestAvecClaEntArtiste->contains($propTestAvecClaEntArtiste)) {
            $this->PropTestAvecClaEntArtiste->add($propTestAvecClaEntArtiste);
        }

        return $this;
    }

    public function removePropTestAvecClaEntArtiste(ClaEntArtiste $propTestAvecClaEntArtiste): static
    {
        $this->PropTestAvecClaEntArtiste->removeElement($propTestAvecClaEntArtiste);

        return $this;
    }

    /**
     * @return Collection<int, ClaEntProduit>
     */
    public function getClaEntProduits(): Collection
    {
        return $this->claEntProduits;
    }

    public function addClaEntProduit(ClaEntProduit $claEntProduit): static
    {
        if (!$this->claEntProduits->contains($claEntProduit)) {
            $this->claEntProduits->add($claEntProduit);
            $claEntProduit->addPropRelProdStyle($this);
        }

        return $this;
    }

    public function removeClaEntProduit(ClaEntProduit $claEntProduit): static
    {
        if ($this->claEntProduits->removeElement($claEntProduit)) {
            $claEntProduit->removePropRelProdStyle($this);
        }

        return $this;
    }
}
