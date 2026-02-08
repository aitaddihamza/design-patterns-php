<?php

class PcPortable
{
  private string $port;
  private string $data;

  private PortAdapter $adapater;

  use HasGettersAndSetters;

  public function __construct(string $port, string $data)
  {
    $this->port = $port;
    $this->data = $data;
  }
}
