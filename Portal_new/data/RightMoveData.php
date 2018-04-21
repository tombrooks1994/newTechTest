<?php 

class RightMoveData	 {
	
	public function load(){
		$file = file_get_contents(__DIR__ . '/example-rightmove.json');
		return $file;
	}
}