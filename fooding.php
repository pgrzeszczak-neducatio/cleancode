<?php

class Fooding {
  public $food = [
    ['types' => ['wege', 'mieso'], 'minprice' => 8, 'maxprice' => 20, 'name' => 'Parabar'],
    ['types' => ['mieso'], 'minprice' => 0, 'maxprice' => 13, 'name' => 'Pastwisko'],
    ['types' => ['wege', 'mieso'], 'minprice' => 100, 'maxprice' => 200, 'name' => 'Sushi'],
    ['types' => ['wege'], 'minprice' => 10, 'maxprice' => 20, 'name' => 'Porażka'],
    ['types' => ['wege', 'mieso'], 'minprice' => 10, 'maxprice' => 18, 'name' => 'Łyżki dwie'],
  ];

  public function choose() {
    $t = readline("Jedzenie wege czy mieso: ");
    $p = readline("Ile masz PLN: ");
    if ($t == 'wege') {
      for($i=0; $i<count($this->food); $i++)
      {
        for($j=0;$j<count($this->food[$i]['types']);$j++) {
          if ($this->food[$i]['types'][$j] == 'wege') {
            if ($this->food[$i]['minprice'] <= $p) {
              if ($this->food[$i]['maxprice'] >= $p)
              {
                echo 'Możesz zjeść w ' . $this->food[$i]['name'] . "\n";
              }
            }
          }
        }
      }
    } else {
      if ($t == 'mieso')
      {
        for($i=0; $i<count($this->food); $i++)
        {
          for($j=0;$j<count($this->food[$i]['types']);$j++) {
            if ($this->food[$i]['types'][$j] == 'mieso') {
              if ($this->food[$i]['minprice'] <= $p) {
                if ($this->food[$i]['maxprice'] >= $p)
                {
                  echo 'Możesz zjeść w ' . $this->food[$i]['name'] . "\n";
                }
              }
            }
          }
        }
      }
    }
  }
}


$f = new Fooding();
$f->choose();
