<?php

namespace Otus\Lessons\Lesson5\Classes;

use Otus\Lessons\Lesson5\Classes\StrategyMinus;
// use Otus\Lessons\Lesson5\Classes\StrategyMultiply;
// use Otus\Lessons\Lesson5\Classes\StrategyPlus;
// use Otus\Lessons\Lesson5\Classes\StrategySplit;

class StrategyContext
{
    private $strategy = null;
    public function __construct($strategy_ind_id)
    {
        switch ($strategy_ind_id) {
            case "+":
                $this->strategy = new StrategyPlus();
                break;
            case "-":
                $this->strategy = new StrategyMinus();
                break;
            case "x":
                $this->strategy = new StrategyMultiply();
                break;
            case "/":
                $this->strategy = new StrategySplit();
                break;
        }
    }

    public function getResult($calcObj)
    {
        return $this->strategy->calc($calcObj);
    }
}
