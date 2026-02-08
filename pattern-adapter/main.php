<?php


require_once "./Traits/HasGettersAndSetters.php";
require_once "./Cable.php";
require_once "./PcPortable.php";
require_once "./VideoProjector.php";
require_once "./Adapaters/PortAdapter.php";
require_once "./Adapaters/HdmiUsbAdapter.php";
require_once "./Adapaters/HdmiVgaAdapter.php";

$pc = new PcPortable('HDMI', "ai is taking our job fuck it");
$vp = new VideoProjector("USB");

echo "Pc is using " . $pc->port . " port \n";
echo "Video Project is using " . $vp->port . " port \n";
// echo "Pc has presentation about " . $pc->presentation;

// now let's instancitate a cable and check the connection

$cable = new Cable(type: 'HDMI');

echo "{$cable->type} cable \n";


// $pc->setAdapter(new HdmiVgaAdapter());
$vp->adapater = new HdmiUsbAdapter();

echo $vp->getAdapter();

$checkConnection = $cable->connect($pc->port, $vp->port);

if ($checkConnection) {
  echo "connected successfuly! \n";
} else {
  throw new Exception("Can't connect devices !");
}



echo PHP_EOL;
