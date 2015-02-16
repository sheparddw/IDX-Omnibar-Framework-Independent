<?php

$apiKey = 'YOURAPIKEYHERE';
//GETCITIES
// access URL and request method
$url = 'https://api.idxbroker.com/clients/cities/combinedActiveMLS';
$method = 'GET';

// headers (required and optional) 
$headers = array(
	'Content-Type: application/x-www-form-urlencoded', // required
	'accesskey:'.$apiKey, // required - replace with your own
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
$cities = curl_exec($handle);
$code = curl_getinfo($handle, CURLINFO_HTTP_CODE);

//GETCOUNTIES
// access URL and request method
$url = 'https://api.idxbroker.com/clients/counties/combinedActiveMLS';
$method = 'GET';

// headers (required and optional)
$headers = array(
	'Content-Type: application/x-www-form-urlencoded', // required
	'accesskey:'.$apiKey, // required - replace with your own
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
$counties = curl_exec($handle);
$code = curl_getinfo($handle, CURLINFO_HTTP_CODE);
//GETZIPCODES
$url = 'https://api.idxbroker.com/clients/zipcodes/combinedActiveMLS';
$method = 'GET';

// headers (required and optional)
$headers = array(
	'Content-Type: application/x-www-form-urlencoded', // required
	'accesskey:'.$apiKey, // required - replace with your own
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
$zipcodes = curl_exec($handle);
$code = curl_getinfo($handle, CURLINFO_HTTP_CODE);

//avoid errors if feed is missing counties or zipcodes
if($cities){$cities = ' "cities" : '.$cities;};
if($counties){$counties = ', "counties" : '.$counties;};
if($zipcodes){$zipcodes = ', "zipcodes" : '.$zipcodes;};


$jsonLocations = '{'.$cities.$counties.$zipcodes.'}';
$cachedfile = 'locationlist.json';
$date = date('l jS \of F Y h:i:s A');

file_put_contents ( $cachedfile , $jsonLocations, true );

echo "Your call has been made on " . $date . ". To see the result, navigate to <a href='locationlist.json'>locationlist.json</a>"

	
		?>