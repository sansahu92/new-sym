<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ConfiguratorOtherItemsOptionsRepository")
 */
class ConfiguratorOtherItemsOptions
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $configurator_item_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $sequence;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $colour;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $conditions;

    public function getId()
    {
        return $this->id;
    }

    public function getConfiguratorItemId(): ?int
    {
        return $this->configurator_item_id;
    }

    public function setConfiguratorItemId(int $configurator_item_id): self
    {
        $this->configurator_item_id = $configurator_item_id;

        return $this;
    }

    public function getSequence(): ?int
    {
        return $this->sequence;
    }

    public function setSequence(int $sequence): self
    {
        $this->sequence = $sequence;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getColour(): ?string
    {
        return $this->colour;
    }

    public function setColour(string $colour): self
    {
        $this->colour = $colour;

        return $this;
    }

    public function getConditions(): ?string
    {
        return $this->conditions;
    }

    public function setConditions(string $conditions): self
    {
        $this->conditions = $conditions;

        return $this;
    }
}
