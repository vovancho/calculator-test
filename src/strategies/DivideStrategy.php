<?php
/**
 * Created by PhpStorm.
 * User: VOVANCHO
 * Date: 21.06.2018
 * Time: 8:29
 */

namespace calc\strategies;

use calc\CalculateException;

class DivideStrategy extends BaseStrategy
{
    protected function customValidate($a, $b)
    {
        if ($b === 0) {
            throw new CalculateException('Division by zero.');
        }
    }

    protected function calc($a, $b)
    {
        return $a / $b;
    }
}