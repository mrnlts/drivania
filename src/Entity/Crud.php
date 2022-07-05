<?php

namespace App\Entity;

use App\Repository\CrudRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CrudRepository::class)]
class Crud
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $uuid;

    #[ORM\Column(type: 'json')]
    private $pickup = [];

    #[ORM\Column(type: 'json')]
    private $dropOff = [];

    #[ORM\Column(type: 'string', length: 255)]
    private $vehicleType;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUuid(): ?string
    {
        return $this->uuid;
    }

    public function setUuid(string $uuid): self
    {
        $this->uuid = $uuid;

        return $this;
    }

    public function getPickup(): ?array
    {
        return $this->pickup;
    }

    public function setPickup(array $pickup): self
    {
        $this->pickup = $pickup;

        return $this;
    }

    public function getDropOff(): ?array
    {
        return $this->dropOff;
    }

    public function setDropOff(array $dropOff): self
    {
        $this->dropOff = $dropOff;

        return $this;
    }

    public function getVehicleType(): ?string
    {
        return $this->vehicleType;
    }

    public function setVehicleType(string $vehicleType): self
    {
        $this->vehicleType = $vehicleType;

        return $this;
    }
}
