<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\StockProduitRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=StockProduitRepository::class)
 */
class StockProduit
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $stockInitial;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $stockFinal;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $quantiteUtilise;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStockInitial(): ?int
    {
        return $this->stockInitial;
    }

    public function setStockInitial(?int $stockInitial): self
    {
        $this->stockInitial = $stockInitial;

        return $this;
    }

    public function getStockFinal(): ?int
    {
        return $this->stockFinal;
    }

    public function setStockFinal(?int $stockFinal): self
    {
        $this->stockFinal = $stockFinal;

        return $this;
    }

    public function getQuantiteUtilise(): ?int
    {
        return $this->quantiteUtilise;
    }

    public function setQuantiteUtilise(?int $quantiteUtilise): self
    {
        $this->quantiteUtilise = $quantiteUtilise;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }
}
