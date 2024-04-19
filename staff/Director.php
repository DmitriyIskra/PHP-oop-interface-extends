<?php
declare(strict_types=1);




namespace staff;
use interfaces\LeadInterface;
use mainClass\MainClass;

class Director extends MainClass implements LeadInterface
{
    public string $city;
    public string $car;
    public string $colorCar;    public string $functional = 'может управлять или руководить';

 
    public function getLead() : string
    {
        return "$this->functional";
    }

    
    public function getAbout(): string
    {
        return "$this->surname $this->name, позиция: $this->position, зарплата: $this->salary $this->currency, ".$this->getLead().PHP_EOL;
    }

    
    public function getSalary(): int
    {
        return $this->salary;
    }

    // ТРИ ИНДИВИДУАЛЬНЫХ МЕТОДА ДЛЯ ПРИМЕРА

    /**
     * Задаем данные об авто
     * **/ 
    public function setCar(string $car, string $color): void
    {
        $this->car = $car;
        $this->colorCar = $color;
    }

    /**
     * Получаем данные о городе
     * **/ 
    public function setCity(string $city): void
    {
        $this->city = $city;
    }

    /**
     * Получаем данные об авто
     * **/ 
    public function getAboutCar(): string
    {
        if(isset($this->car) && isset($this->colorCar)) {
            return "Автомобиль марки $this->car, цвет $this->colorCar".PHP_EOL;
        } else {
            return "Данных об автомобиле нет".PHP_EOL;
        }
    }
} 