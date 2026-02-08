<?php

class VideoProjector
{
  use HasGettersAndSetters;

  private string $port;
  private PortAdapter $adapater;

  public function __construct(string $port)
  {
    $this->port = $port;
  }
}
