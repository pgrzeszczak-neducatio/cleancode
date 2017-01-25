<?php

class Calculator {
  public $x1;
  public $x2;
  public function read() {
    $this->number1 = readline("Enter first number: ");
    $this->number2 = readline("Enter second number: ");
  }
  public function calc() {
    $op = readline("Enter operator: ");
    if ($op == '+') {
      echo $this->x1 + $this->x2;
    } else {
      if ($op == '-') {
        echo $this->x1 - $this->x2;
      } else {
        if ($op == '*') {
          echo $this->x1 * $this->x2;
        } else {
          if ($op == '/') {
            echo $this->x1 / $this->x2;
          }
        }
      }
    }
  }
}



$c = new Calculator();
$c->read();
$c->calc();
