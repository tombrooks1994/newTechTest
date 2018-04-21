<?php 

require_once('data/RightMoveData.php');
require_once('formatter/RightMoveFormatter.php');
require_once('data/OnTheMarketData.php');
require_once('formatter/OnTheMarketFormatter.php');
require_once('data/ZooplaData.php');
require_once('formatter/ZooplaFormatter.php');
require_once(__DIR__ . '/StoreCSV.php');

if($_GET['param'] == 'rm') {
	
	$rightMoveDataLoader = new RightMoveData();
	$rightMoveData = $rightMoveDataLoader->load();
	
	$rightMoveFormatter = new RightMoveFormatter();
	$data = $rightMoveFormatter->format($rightMoveData);
	
}

if ($_GET['param'] == 'otm') {
	
	$onTheMarketLoader = new OnTheMarketData();
	$onTheMarketData = $onTheMarketLoader->load();
	
	$onTheMarketFormatter = new OnTheMarketFormatter();
	$data = $onTheMarketFormatter->format($onTheMarketData);
	
}

if ($_GET['param'] == 'zp') {
	
	$zooplaDataLoader = new ZooplaData();
	$zooplaData = $zooplaDataLoader->load();
	
	$zooplaFormatter = new ZooplaFormatter();
	$data = $zooplaFormatter->format($zooplaData);
	
}

$storeCSV = new StoreCSV(); 
$csvStore = $storeCSV->store($data, $_GET['param']);