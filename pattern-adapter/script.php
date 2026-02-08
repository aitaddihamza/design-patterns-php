<?php


// php oop clone magic special method, that allow copy by value

class Address
{
  public string $city;

  public function __construct(string $city)
  {
    $this->city = $city;
  }
}


class Animal
{
  public string $name;
  public Address $address;

  public function __construct(string $name, Address $address)
  {
    $this->name = $name;
    $this->address = $address;
  }

  public function __clone()
  {
    $this->address = clone $this->address;
  }
}


$address = new Address('Fes');
$a1 = new Animal("rabbit", $address);
$a2 = clone $a1; // passage par valeur
$a1->name = "monkey";
$a1->address->city = "Casa";

echo $a1->name . " he is living in " . $a1->address->city . PHP_EOL;
echo $a2->name . " he is living in " . $a2->address->city . PHP_EOL;
