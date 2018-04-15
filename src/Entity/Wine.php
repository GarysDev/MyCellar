<?php

declare(strict_types=1);

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table(name="wine")
 */
class Wine
{
    /**
     * @ORM\Column(type="guid")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="UUID")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $name;

    /**
     * @ORM\Column(type="string")
     */
    private $designation;

    /**
     * @ORM\Column(type="string")
     */
    private $varietal;

    /**
     * @ORM\Column(type="string")
     */
    private $color;

    /**
     * @ORM\Column(type="integer")
     */
    private $vintage;

    /**
     * @ORM\Column(type="string")
     */
    private $country;

    /**
     * @ORM\Column(type="string")
     */
    private $region;

    /**
     * @ORM\Column(type="string")
     */
    private $winemaker;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $rating = null;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $comment = null;

    /**
     * @ORM\Column(name="food_pairing", type="text", nullable=true)
     */
    private $foodPairing = null;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $reference = null;

    /**
     * @ORM\Column(name="classification_level" ,type="string", nullable=true)
     */
    private $classificationLevel = null;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $aging = null;

    /**
     * @ORM\Column(name="best_aging", type="string", nullable=true)
     */
    private $bestAging = null;

    /**
     * @ORM\Column(name="best_after", type="string", nullable=true)
     */
    private $bestAfter = null;

    /**
     * @ORM\Column(name="drink_after", type="string", nullable=true)
     */
    private $drinkAfter = null;

    /**
     * @ORM\Column(name="alcohol_degree", type="float", nullable=true)
     */
    private $alcoholDegree = null;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $temperature = null;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $batch = null;

    /**
     * @ORM\Column(type="string")
     */
    private $category;

    /**
     * @ORM\OneToMany(targetEntity="Bottle", mappedBy="wine", cascade={"remove", "persist"}, orphanRemoval=true)
     */
    private $bottles;

    public function __construct()
    {
        $this->bottles = new ArrayCollection();
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getDesignation(): string
    {
        return $this->designation;
    }

    public function setDesignation(string $designation): self
    {
        $this->designation = $designation;

        return $this;
    }

    public function getVarietal(): string
    {
        return $this->varietal;
    }

    public function setVarietal(string $varietal): self
    {
        $this->varietal = $varietal;

        return $this;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor(string $color): self
    {
        $this->color = $color;

        return $this;
    }

    public function getVintage(): string
    {
        return $this->vintage;
    }

    public function setVintage(string $vintage): self
    {
        $this->vintage = $vintage;

        return $this;
    }

    public function getCountry(): string
    {
        return $this->country;
    }

    public function setCountry(string $country): self
    {
        $this->country = $country;

        return $this;
    }

    public function getRegion(): string
    {
        return $this->region;
    }

    public function setRegion(string $region): self
    {
        $this->region = $region;

        return $this;
    }

    public function getWinemaker(): string
    {
        return $this->winemaker;
    }

    public function setWinemaker(string $winemaker): self
    {
        $this->winemaker = $winemaker;

        return $this;
    }

    public function getRating(): ?int
    {
        return $this->rating;
    }

    public function setRating(int $rating): self
    {
        $this->rating = $rating;

        return $this;
    }

    public function getComment(): ?string
    {
        return $this->comment;
    }

    public function setComment(string $comment): self
    {
        $this->comment = $comment;

        return $this;
    }

    public function getFoodPairing(): ?string
    {
        return $this->foodPairing;
    }

    public function setFoodPairing(string $foodPairing): self
    {
        $this->foodPairing = $foodPairing;

        return $this;
    }

    public function getReference(): ?string
    {
        return $this->reference;
    }

    public function setReference(string $reference): self
    {
        $this->reference = $reference;

        return $this;
    }

    public function getClassificationLevel(): ?string
    {
        return $this->classificationLevel;
    }

    public function setClassificationLevel(string $classificationLevel): self
    {
        $this->classificationLevel = $classificationLevel;

        return $this;
    }

    public function getAging(): ?string
    {
        return $this->aging;
    }

    public function setAging(string $aging): self
    {
        $this->aging = $aging;

        return $this;
    }

    public function getBestAging(): \DateTime
    {
        return $this->bestAging;
    }

    public function setBestAging(\DateTime $bestAging): self
    {
        $this->bestAging = $bestAging;

        return $this;
    }

    public function getBestAfter(): \DateTime
    {
        return $this->bestAfter;
    }

    public function setBestAfter(\DateTime $bestAfter): self
    {
        $this->bestAfter = $bestAfter;

        return $this;
    }

    public function getDrinkAfter(): \DateTime
    {
        return $this->drinkAfter;
    }

    public function setDrinkAfter(\DateTime $drinkAfter): self
    {
        $this->drinkAfter = $drinkAfter;

        return $this;
    }

    public function getAlcoholDegree(): ?string
    {
        return $this->alcoholDegree;
    }

    public function setAlcoholDegree(string $alcoholDegree): self
    {
        $this->alcoholDegree = $alcoholDegree;

        return $this;
    }

    public function getTemperature(): ?int
    {
        return $this->temperature;
    }

    public function setTemperature(int $temperature): self
    {
        $this->temperature = $temperature;
    }

    public function getBatch(): ?string
    {
        return $this->batch;
    }

    public function setBatch(string $batch): self
    {
        $this->batch = $batch;

        return $this;
    }

    public function getCategory(): string
    {
        return $this->category;
    }

    public function setCategory(string $category): self
    {
        $this->category = $category;

        return $this;
    }

    public function getBottles(): ArrayCollection
    {
        return $this->bottles;
    }

    public function addBottle(Bottle $bottle): self
    {
        if (!$this->bottles->contains($bottle)) {
            $this->bottles[] = $bottle;
            $bottle->setWine($this);
        }

        return $this;
    }

    public function removeBottle(Bottle $bottle): self
    {
        if ($this->bottles->contains($bottle)) {
            $this->bottles->remove($bottle);
            $bottle->setWine(null);
        }

        return $this;
    }
}
