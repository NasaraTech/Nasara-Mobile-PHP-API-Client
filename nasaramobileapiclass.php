<?php

class NasaraMobileApiClass{

	public $apiKey;
	public $baseUrl;
	public $baseUrlArguments;
	public $urlParams;


	public function __construct(){

		$this->apiKey = "52a775db0dd8152a775db141cd";
		$this->baseUrl = "http://sms.nasaramobile.com/api";
		$this->baseUrlArguments = "?api_key=".$this->apiKey;
	}

	public function sendSms($phone, $senderId, $message){

		$this->urlParams = "&sender_id=".$senderId."&&phone=".$phone."&message=".urlencode($message);

		$response = file_get_contents($this->baseUrl.$this->baseUrlArguments.$this->urlParams);

		var_dump($response);

	}
}