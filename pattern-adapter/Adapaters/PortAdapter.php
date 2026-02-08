<?php

interface PortAdapter
{
  public function convert(string $port): string;
}
