<?php
/**
 *
 */
namespace Array2XML;

use Symfony\Component\Yaml;

use Array2XML\Array2XML;

class YAML2XML {

public static function convertYAMLToXML($inpurYAML,$xmlRootNode){
	
	$array = Yaml::parse($$inpurYAML);
    $xml = Array2XML::createXML($xmlRootNode, $array);
   	return $xml->saveXML();

}

 }
?>
