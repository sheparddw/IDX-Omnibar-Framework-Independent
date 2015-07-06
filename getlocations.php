<?php

$apiKey = 'YOURAPIKEYHERE';

function idx_api_call($url, $apiKey){
	$method = 'GET';
	// headers (required and optional)
	$headers = array(
		'Content-Type: application/x-www-form-urlencoded', // required
		'accesskey:'.$apiKey, // required
		'outputtype: json' // optional - overrides the preferences in our API control page
	);
	// set up cURL
	$handle = curl_init();
	curl_setopt($handle, CURLOPT_URL, $url);
	curl_setopt($handle, CURLOPT_HTTPHEADER, $headers);
	curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($handle, CURLOPT_SSL_VERIFYHOST, false);
	curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, false);
	// exec the cURL request and returned information. Store the returned HTTP code in $code for later reference
	return json_encode(json_decode(curl_exec($handle)));
}


$cities = '"cities" : '.idx_api_call('https://api.idxbroker.com/clients/cities/combinedActiveMLS', $apiKey);
$counties = ', "counties" : '.idx_api_call('https://api.idxbroker.com/clients/counties/combinedActiveMLS', $apiKey);
$zipcodes = ', "zipcodes" : '.idx_api_call('https://api.idxbroker.com/clients/zipcodes/combinedActiveMLS', $apiKey);
//location lists together
$locations = 'idxOmnibar({'.$cities.$counties.$zipcodes.'})';

file_put_contents ( 'assets/js/locationlist.json' , $locations );

echo "Your call has been made. To see the result, navigate to <a href='assets/js/locationlist.json'>locationlist.json</a>"


		?>
