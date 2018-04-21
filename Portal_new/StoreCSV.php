<?php 

class StoreCSV {
	
	public function store($data, $fileName) {
		
		print_r($data);
		
		$file = fopen('csv/' . $fileName . '.csv', 'w');
 
		fputcsv($file, array(
								'Property Code', 
								'Branch ID', 
								'Address 1', 
								'Address 2', 
								'Address 3', 
								'Postcode', 
								'Landlord Title', 
								'Landlord First Name', 
								'Landlord Surname', 
								'Landlord Phone'
							)
				);
  
		fputcsv($file, $data);
		
		fclose($file);
		
	}	
}