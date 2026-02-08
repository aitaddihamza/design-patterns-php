<?php

class HdmiVgaAdapter implements PortAdapter
{
  public function convert(string $port): string
  {
    if (!in_array($port, ['HDMI', 'VGA'])) {
      throw new Exception("You can't use this adapter ");
    }

    return match ($port) {
      "HDMI" => "VGA",
      "VGA" => "HDMI"
    };
  }
}
