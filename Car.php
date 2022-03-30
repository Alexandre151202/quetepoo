<?php

class Car
{
    /*Propriétés*/
    private int $nbWheels;
    private int $currentSpeed;
    private string $color;
    private int $nbSeats;
    private string $energy;
    private int $energyLevel;

    /*Constructeur*/
    public function __construct(string $color, int $nbSeats, string $energy)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }

    /*Méthode forward*/
    public function forward(): string
    {
        $this->currentSpeed = 250;
        return "Go !";
    }

    /*Méthode Brake*/
    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }

    /*Méthode Start*/
    public function start(): string
    {
        return "The vehicle is started !";
    }

    /*Getter nbWheels*/
    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }

    /*Getter currentSpeed*/
    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    /*Getter color*/
    public function getColor(): string
    {
        return $this->color;
    }

    /*Getter nbSeats*/
    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }

    /*Getter energy*/
    public function getEnergy(): string
    {
        return $this->energy;
    }

    /*Getter energyLevel*/
    public function getEnergyLevel(): string
    {
        return $this->energyLevel;
    }
}
