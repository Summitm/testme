<?php

/**
 * @author root
 *on 12.20.2018
 */
class Payment
{
	
	// function __construct()
	// {
	// 	# code...
	// }

	function getAuthentication()
	{
		$url = 'https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials';

		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, $url);
		$credentials = base64_encode('cNJHuybnZTKGQFv34yl7Ywa9yWFtmXoX:tOMWnnvIU8FFoi29');
		curl_setopt($curl, CURLOPT_HTTPHEADER, array('Authorization: Basic '.$credentials));
		curl_setopt($curl, CURLOPT_HEADER, true);
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

		$curl_response = curl_exec($curl);

		echo json_decode($curl_response);

	}
}

?>