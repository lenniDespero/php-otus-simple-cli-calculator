<?php

namespace Otus\Lessons\Lesson5\Classes;

class Calc
{
    private $firstNumber;
    private $secondNumber;
    public function __construct($firstNumber, $secondNumber)
    {
        $this->firstNumber = $firstNumber;
        $this->secondNumber = $secondNumber;
    }
    public function getFirstNumber()
    {
        return $this->firstNumber;
    }
    public function getSecondNumber()
    {
        return $this->secondNumber;
    }
}