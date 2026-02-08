<?php


trait HasGettersAndSetters
{
  public function __get(string $attName)
  {
    if ($attName == "data") {
      throw new Exception("can't access to pc's presentation, it's private");
    }
    return $this->$attName;
  }

  public function __set($attName, $value)
  {
    $this->$attName = $value;
    if ($attName == "adapater" && $value instanceof PortAdapter) {
      $this->port = $this->adapater->convert($this->port);
    }
  }

  public function getAdapter(): string
  {
    $className = get_class($this->adapater);
    return "the current adapter is : " . $className . "\n";
  }
}
