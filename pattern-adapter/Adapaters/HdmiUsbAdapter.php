<?php

class HdmiUsbAdapter implements PortAdapter
{
  public function convert(string $port): string
  {
    if (!in_array($port, ['HDMI', 'USB'])) {
      throw new Exception("You can't use this adapter ");
    }

    return match ($port) {
      "HDMI" => "USB",
      "USB" => "HDMI"
    };
  }
}
