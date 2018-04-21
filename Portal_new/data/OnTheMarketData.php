<?php 

class OnTheMarketData	 {
	
	public function load(){
		$file = file_get_contents(__DIR__ . '/example-on-the-market.json');
		return $file;
	}
}