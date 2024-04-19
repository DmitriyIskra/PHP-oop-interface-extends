<?php
declare(strict_types=1);

namespace mainClass;
abstract class MainClass
{
    protected string $name;
    protected string $surname; 
    protected string $position;
    protected int $salary; 

    protected string $currency = "попугаев";

    public function __construct(string $name, string $surname, string $position, int $salary) {
        $this->name = $name;
        $this->surname = $surname;
        $this->position = $position;
        $this->salary = $salary;
    }

    /**
     * Общая информация о сотруднике
     * **/ 
    abstract function getAbout(): string;

    /**
     * Возвращает сумму зарплаты
     * **/
    abstract function getSalary(): int;
}

