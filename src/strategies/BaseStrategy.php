<?php
/**
 * Created by PhpStorm.
 * User: VOVANCHO
 * Date: 21.06.2018
 * Time: 8:37
 */

namespace calc\strategies;


use calc\CalculateException;
use calc\CalculateStrategyInterface;

abstract class BaseStrategy implements CalculateStrategyInterface
{
    public function result($a, $b)
    {
        $this->validateInputAsInt($a, $b);
        $this->customValidate($a, $b);
        return $this->calc($a, $b);
    }

    protected function validateInputAsInt($a, $b)
    {
        if (!is_int($a)) {
            throw new CalculateException('First variable not integer');
        }

        if (!is_int($b)) {
            throw new CalculateException('Second variable not integer');
        }
    }

    protected function customValidate($a, $b)
    {

    }

    abstract protected function calc($a, $b);
}