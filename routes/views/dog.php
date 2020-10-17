<?php

class Dog 
{
  public $name = 'Hachi';
  public function bark () {
    echo "ワン";
  }
}

$a = new Dog();

echo $a->name;
echo "\n";