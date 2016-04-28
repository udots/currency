<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Currency extends CI_Model {
	
	public function getData($base,$pair) {
	
		$BASE_URL = "http://query.yahooapis.com/v1/public/yql";
    		$yql_query = 'select * from yahoo.finance.xchange where pair in ("'.$base.$pair.'")';
    		$yql_query_url = $BASE_URL . "?q=" . urlencode($yql_query) . "&format=json";
    		// Make call with cURL
    		$session = curl_init($yql_query_url);
    		curl_setopt($session, CURLOPT_RETURNTRANSFER,true);
    		$json = curl_exec($session);
    		// Convert JSON to PHP object
     		$phpObj =  json_decode($json);
    		// var_dump($phpObj);
		return json_decode($phpObj,true);

	}
	
}

?>