<?php

namespace App\Entity;

use App\Repository\ClaEntProduitRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ClaEntProduitRepository::class)]
class ClaEntProduit
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $PropProduit = null;

    #[ORM\Column]
    private ?int $PropProduitPrice = null;

    #[ORM\ManyToMany(targetEntity: ClaEntStyle::class, inversedBy: 'claEntProduits')]
    private Collection $PropRelProdStyle;

    public function __construct()
    {
        $this->PropRelProdStyle = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPropProduit(): ?string
    {
        return $this->PropProduit;
    }

    public function setPropProduit(string $PropProduit): static
    {
        $this->PropProduit = $PropProduit;

        return $this;
    }

    public function getPropProduitPrice(): ?int
    {
        return $this->PropProduitPrice;
    }

    public function setPropProduitPrice(int $PropProduitPrice): static
    {
        $this->PropProduitPrice = $PropProduitPrice;

        return $this;
    }

    /**
     * @return Collection<int, ClaEntStyle>
     */
    public function getPropRelProdStyle(): Collection
    {
        return $this->PropRelProdStyle;
    }

    public function addPropRelProdStyle(ClaEntStyle $propRelProdStyle): static
    {
        if (!$this->PropRelProdStyle->contains($propRelProdStyle)) {
            $this->PropRelProdStyle->add($propRelProdStyle);
        }

        return $this;
    }

    public function removePropRelProdStyle(ClaEntStyle $propRelProdStyle): static
    {
        $this->PropRelProdStyle->removeElement($propRelProdStyle);

        return $this;
    }
}
