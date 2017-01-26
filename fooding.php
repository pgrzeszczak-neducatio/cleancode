<?php

class Fooding {

    public $food = [
        ['types' => ['wege', 'mieso'], 'minprice' => 8, 'maxprice' => 20, 'name' => 'Parabar'],
        ['types' => ['mieso'], 'minprice' => 0, 'maxprice' => 13, 'name' => 'Pastwisko'],
        ['types' => ['wege', 'mieso'], 'minprice' => 100, 'maxprice' => 200, 'name' => 'Sushi'],
        ['types' => ['wege'], 'minprice' => 10, 'maxprice' => 20, 'name' => 'Porażka'],
        ['types' => ['wege', 'mieso'], 'minprice' => 10, 'maxprice' => 18, 'name' => 'Łyżki dwie'],
    ];

    public function chooseFood() {
        $preferredFood = readline("Jedzenie wege czy mieso: ");
        $availCash = readline("Ile masz PLN: ");

        if ($preferredFood == 'wege') {
            for ($i = 0; $i < count($this->food); $i++) {
                for ($j = 0; $j < count($this->food[$i]['types']); $j++) {
                    if (($this->food[$i]['types'][$j] == 'wege') && ($this->food[$i]['minprice'] <= $availCash)) {
                        echo 'Możesz zjeść w ' . $this->food[$i]['name'] . "\n";
                    }
                }
            }
        }

        if ($preferredFood == 'mieso') {
            for ($i = 0; $i < count($this->food); $i++) {
                for ($j = 0; $j < count($this->food[$i]['types']); $j++) {
                    if (($this->food[$i]['types'][$j] === 'mieso') && ($this->food[$i]['minprice'] <= $availCash)) {
                        echo 'Możesz zjeść w ' . $this->food[$i]['name'] . "\n";
                    }
                }
            }
        }
    }

}

$f = new Fooding();
$f->chooseFood();
