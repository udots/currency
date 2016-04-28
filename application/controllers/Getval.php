<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Getval extends CI_Controller {
	
	public function showval($base,$pair) {
		$url = "https://query.yahooapis.com/v1/public/yql?q=select%20*%20from%20yahoo.finance.xchange%20where%20pair%20in%20(%22".$base.$pair."%22)&format=json&diagnostics=true&env=store%3A%2F%2Fdatatables.org%2Falltableswithkeys&callback=";
		$this->load->view("home",array("url"=>$url));
	}
	
}