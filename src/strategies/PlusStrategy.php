<?php
/**
 * Created by PhpStorm.
 * User: VOVANCHO
 * Date: 21.06.2018
 * Time: 8:29
 */

namespace calc\strategies;

class PlusStrategy extends BaseStrategy
{
    protected function calc($a, $b)
    {
        return $a + $b;
    }
}