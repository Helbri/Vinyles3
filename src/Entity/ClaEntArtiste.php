<?php

namespace App\Entity;

use App\Repository\ClaEntArtisteRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ClaEntArtisteRepository::class)]
class ClaEntArtiste
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $PropArtiste = null;

    #[ORM\ManyToMany(targetEntity: ClaEntStyle::class, inversedBy: 'NeoChmpdansClaEntStylePourClaEntArtistes')]
    private Collection $PropTestAvecClaEntStyle;

    #[ORM\ManyToMany(targetEntity: ClaEntStyle::class, mappedBy: 'PropTestAvecClaEntArtiste')]
    private Collection $claEntStyles;

    public function __construct()
    {
        $this->PropTestAvecClaEntStyle = new ArrayCollection();
        $this->claEntStyles = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPropArtiste(): ?string
    {
        return $this->PropArtiste;
    }

    public function setPropArtiste(string $PropArtiste): static
    {
        $this->PropArtiste = $PropArtiste;

        return $this;
    }

    /**
     * @return Collection<int, ClaEntStyle>
     */
    public function getPropTestAvecClaEntStyle(): Collection
    {
        return $this->PropTestAvecClaEntStyle;
    }

    public function addPropTestAvecClaEntStyle(ClaEntStyle $propTestAvecClaEntStyle): static
    {
        if (!$this->PropTestAvecClaEntStyle->contains($propTestAvecClaEntStyle)) {
            $this->PropTestAvecClaEntStyle->add($propTestAvecClaEntStyle);
        }

        return $this;
    }

    public function removePropTestAvecClaEntStyle(ClaEntStyle $propTestAvecClaEntStyle): static
    {
        $this->PropTestAvecClaEntStyle->removeElement($propTestAvecClaEntStyle);

        return $this;
    }

    /**
     * @return Collection<int, ClaEntStyle>
     */
    public function getClaEntStyles(): Collection
    {
        return $this->claEntStyles;
    }

    public function addClaEntStyle(ClaEntStyle $claEntStyle): static
    {
        if (!$this->claEntStyles->contains($claEntStyle)) {
            $this->claEntStyles->add($claEntStyle);
            $claEntStyle->addPropTestAvecClaEntArtiste($this);
        }

        return $this;
    }

    public function removeClaEntStyle(ClaEntStyle $claEntStyle): static
    {
        if ($this->claEntStyles->removeElement($claEntStyle)) {
            $claEntStyle->removePropTestAvecClaEntArtiste($this);
        }

        return $this;
    }
}
