<?php

namespace calc\tests;

use calc\CalculateException;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /** @var  \calc\Calculator */
    private $calculator;

    public function setUp()
    {
        $this->calculator = new \calc\Calculator();
    }

    public function testInt()
    {
        $strategy = new \calc\strategies\PlusStrategy();

        $this->calculator->setStrategy($strategy);

        $this->setExpectedException(CalculateException::class, 'First variable not integer');
        $this->assertEquals(3, $this->calculator->result('6', 1));

        $this->setExpectedException(CalculateException::class, 'Second variable not integer');
        $this->assertEquals(3, $this->calculator->result(6, '1'));
    }

    public function testPlus()
    {
        $strategy = new \calc\strategies\PlusStrategy();

        $this->calculator->setStrategy($strategy);
        $this->assertEquals(4, $this->calculator->result(1, 3));
    }

    public function testMinus()
    {
        $strategy = new \calc\strategies\MinusStrategy();

        $this->calculator->setStrategy($strategy);
        $this->assertEquals(3, $this->calculator->result(5, 2));
    }

    public function testMultiply()
    {
        $strategy = new \calc\strategies\MultiplyStrategy();

        $this->calculator->setStrategy($strategy);
        $this->assertEquals(6, $this->calculator->result(2, 3));
    }

    public function testDivide()
    {
        $strategy = new \calc\strategies\DivideStrategy();

        $this->calculator->setStrategy($strategy);
        $this->assertEquals(3, $this->calculator->result(6, 2));

        $this->setExpectedException(CalculateException::class, 'Division by zero.');
        $this->assertEquals(3, $this->calculator->result(6, 0));
    }
}
