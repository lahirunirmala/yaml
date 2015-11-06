<?php
/**
 *
 */
namespace Array2XML;
use Symfony\Component\Yaml;
use Array2XML\XML2YAML;
class XML2YAML {

public static function convertXMLToYAML($xml){
	
	$array = XML2Array::createArray($xml);
	$yamlString = Yaml::dump($array);
    return $yamlString;

}

 }
?>
