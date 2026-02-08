<?php

class Cable
{
  use HasGettersAndSetters;

  private string $type;

  public function __construct(string $type)
  {
    $this->type = $type;
  }

  public function connect(string $port1, string $port2)
  {
    if ($port1 != $this->type || $port2 != $this->type) return false;
    return $port1 == $port2;
  }
}
