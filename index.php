<?php
declare(strict_types=1);
use staff\Director;
use staff\Employee;
use staff\Manager;
use staff\Programmer;
use staff\Tester;

require_once('autoload.php');

$p1 = new Director('Name1', 'Surname1', 'Director', 100);
$p2 = new Employee('Name1', 'Surname1', 'Director', 80);
$p3 = new Manager('Name1', 'Surname1', 'Director', 800);
$p4 = new Programmer('Name1', 'Surname1', 'Director', 200);
$p5 = new Tester('Name1', 'Surname1', 'Director', 200);

$department[] = $p1;
$department[] = $p2;
$department[] = $p3;
$department[] = $p4;
$department[] = $p5;



foreach($department as $key => $person) 
{
    static $summSalary = 0;
    
    echo $person->getAbout();

    $summSalary += $person->getSalary();

    if($key === count($department) - 1) {
        echo "Общее количество сотрудников: ".count($department).".".PHP_EOL;
        echo "Общая сумма зарплат: ".$summSalary." попугаев.".PHP_EOL;
    }
}

