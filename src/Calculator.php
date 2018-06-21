<?php
/**
 * Created by PhpStorm.
 * User: VOVANCHO
 * Date: 21.06.2018
 * Time: 8:30
 */

namespace calc;


class Calculator
{
    /** @var  CalculateStrategyInterface */
    protected $strategy;

    public function setStrategy(CalculateStrategyInterface $calculateStrategy)
    {
        $this->strategy = $calculateStrategy;
    }

    public function result($a, $b)
    {
        return $this->strategy->result($a, $b);
    }
}