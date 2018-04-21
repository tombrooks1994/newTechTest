<?php

class OnTheMarketFormatter {
	
	public function format($str) {
		$json = json_decode($str, true);
		
		return array(
			'prpcode' => $json['code'],
			'branch_id' => $json['branch'],
			'address_1' => $json['address']['address1'],
			'address_2' => $json['address']['address2'],
			'address_3' => $json['address']['town'],
			'postcode' => $json['address']['postcode_1'] . ' ' . $json['address']['postcode_2'],
			'title' => $json['landlord']['title'],
			'first_name' => $json['landlord']['first_name'],
			'surname' => $json['landlord']['surname'],
			'phone' => $json['landlord']['phone']			
		);
	}
	
}