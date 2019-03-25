<?php

namespace Otus\Lessons\Lesson5\Classes;

use Otus\Lessons\Lesson5\Interfaces\StrategyInterface;

class StrategySplit implements StrategyInterface
{
    public function calc($calcObj)
    {
        $first = $calcObj->getFirstNumber();
        $second = $calcObj->getSecondNumber();
        return $first / $second;
    }
}