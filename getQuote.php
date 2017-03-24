<?php

include_once("address.class.php");
include_once("consignment.class.php");
include_once("item.class.php");
include_once("interface.php");

$arrData = array();
$arrData['origin_zip_code'] = (string) $_POST['origin_zip_code'];
$arrData['destination_zip_code'] = (string) $_POST['destination_zip_code'];
$arrData['volumes'] = array();
$arrData['volumes']['weight'] = (float)$_POST['weight'];
$arrData['volumes']['volume_type'] = (string)$_POST['volume_type'];
$arrData['volumes']['cost_of_goods'] = (float)$_POST['cost_of_goods'];
$arrData['volumes']['width'] = (float)$_POST['width'];
$arrData['volumes']['height'] = (float)$_POST['height'];
$arrData['volumes']['length'] = (float)$_POST['length'];

$objAddress = new clsaddress($arrData['origin_zip_code'],$arrData['destination_zip_code']);
$objConsignment = new clsConsignment($arrData['volumes']['weight'],$arrData['volumes']['volume_type'],$arrData['volumes']['cost_of_goods'],$arrData['volumes']['width'],$arrData['volumes']['height'],$arrData['volumes']['length']);
$objSample = new clsitem($objAddress->strSource,$objAddress->strDestination,$objConsignment);
$json = json_encode($objSample);
$Response = callService($json);

?>