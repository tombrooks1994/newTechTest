<?php 

class RightMoveFormatter {
	
	public function format($str) {
		$json = json_decode($str, true);
		
		return array(
			'prpcode' => $json['prpcode'],
			'branch_id' => $json['branch_id'],
			'address_1' => $json['address']['address_1'],
			'address_2' => $json['address']['address_2'],
			'address_3' => $json['address']['address_4'],
			'postcode' => $json['address']['postcode'],
			'title' => $json['landlord']['title'],
			'first_name' => $json['landlord']['first_name'],
			'surname' => $json['landlord']['surname'],
			'phone' => $json['phone']			
		);
	}
	
}