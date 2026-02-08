<?php


class Home
{

  public function __construct(
    private string $type,
    private int $rooms,
    private int $doors,
    private int $stages,
    private int $windows

  ) {}

  public function describe(): string
  {
    return "Home type is {$this->type}, it has {$this->stages} stages, {$this->doors} doors, {$this->windows} windows and {$this->rooms} rooms";
  }
}

class HomeBuilder
{
  private int $windows = 1;
  private int $rooms = 1;
  private int $doors = 1;
  private int $stages = 1;
  private string $type = "standard";


  public function setType(string $type): self
  {
    $this->type = $type;
    return $this;
  }

  public function setWindwos(int $windows): self
  {
    $this->windows = $windows;
    return $this;
  }

  public function setRooms(int $rooms): self
  {
    $this->rooms = $rooms;
    return $this;
  }

  public function setStages(int $stages): self
  {
    $this->stages = $stages;
    return $this;
  }

  public function setDoors(int $doors): self
  {
    $this->doors = $doors;
    return $this;
  }

  public function build(): Home
  {
    return new Home(
      $this->type,
      $this->rooms,
      $this->doors,
      $this->stages,
      $this->windows
    );
  }
}


$builder = new HomeBuilder();
$builder->setType('simple')
  ->setStages(2)
  ->setDoors(4)
  ->setRooms(3)
  ->setWindwos(4);

$myHome = $builder->build();

echo $myHome->describe() . PHP_EOL;
