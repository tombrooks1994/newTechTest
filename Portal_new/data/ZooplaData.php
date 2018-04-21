<?php

class ZooplaData {
	
	public function load(){
		$file = simplexml_load_file(__DIR__ . '/example-zoopla.xml');
		$json = json_encode($file);
		return $json;
	}
}