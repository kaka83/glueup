<?php 
use Raccoon\GeoLocation\Facades\Geo;use October\Rain\Router\Router as RainRouter;use Cms\Classes\ComponentBase;class Cms5f5f120a2cd58301109975_6926a0d8af9498f1bc46509d2dc53ea7Class extends Cms\Classes\PartialCode
{

//
//
protected $redirect;

protected $translator;
public function onStart() {
$background = $this->background;

$ipAddress = $_SERVER['REMOTE_ADDR']?:($_SERVER['HTTP_X_FORWARDED_FOR']?:$_SERVER['HTTP_CLIENT_IP']);   
$geoLocation = Geo::getLocation($ipAddress);  
	$this['Location'] = $geoLocation->countryCode; 

//$this['string'] = $string; 
}
}
