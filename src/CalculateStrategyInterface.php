<?php
/**
 * Created by PhpStorm.
 * User: VOVANCHO
 * Date: 21.06.2018
 * Time: 8:26
 */

namespace calc;


interface CalculateStrategyInterface
{
    public function result($a, $b);
}