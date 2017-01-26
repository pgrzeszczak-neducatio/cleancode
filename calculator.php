<?php

class Calculator {

    public $number1;
    public $number2;
    public $operator;

    public function read() {
        $this->number1 = readline("Enter first number: ");
        $this->number2 = readline("Enter second number: ");
        $this->operator = readline("Enter operator: ");
    }

    public function calc() {


        if ($this->operator == '+') {
            echo $this->number1 + $this->number2 . "\n";
        }

        if ($this->operator == '-') {
            echo $this->number1 - $this->number2 . "\n";
        }

        if ($this->operator == '*') {
            echo $this->number1 * $this->number2 . "\n";
        }

        if ($this->operator == '/') {
            echo $this->number1 / $this->number2 . "\n";
        }
    }

}

$c = new Calculator;
$c->read();
$c->calc();
